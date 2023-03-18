<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);
    
    $db = mysqli_connect('localhost', 'root','','db_project1');
    
    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $data = [];
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        return $data;
    }

    function register($data){
        global $db;

        $email = strtolower(stripcslashes($data["email"]));
        $password = $data["password"];
        $password2 = $data["password2"];

        if ($password !== $password2){
            echo "<script>alert('Confirm password dont match')</script>";
            return false;
        } 

        $result = mysqli_query($db, "SELECT email FROM users WHERE email = '$email'");

        if (mysqli_fetch_assoc($result)){
            echo "<script>alert('Email already available')</script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($db, "INSERT INTO users VALUES(NULL, '', '', '$email', '$password')");

        return mysqli_affected_rows($db);

    }

    function sendProblem($data){
        global $db;
        $picture = upload();
        if (!$picture){
            return false;
        }
    $date = htmlspecialchars($data["date"]);
    $message = htmlspecialchars($data["message"]);
    $status = htmlspecialchars($data["status"]);


     //Upload Picture
    

    $query = "INSERT INTO problem VALUES (NULL, '', '$message','$status', '$date', '$picture')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    }

    function upload(){
        $nameFile = $_FILES['picture']['name'];
        $sizeFile = $_FILES['picture']['size'];
        $error = $_FILES['picture']['error'];
        $tmpName = $_FILES['picture']['tmp_name'];
        $root = '/opt/lampp/htdocs/phpdasar/phpdasar/Project1/img';

        //cek apakah tidak ada gambar yang diupload
        if ($error ===  4){
            echo "
                <script>
                alert('pick picture first')
                </script>
            ";
            return false;
        }

        $validExtension = ['jpg', 'jpeg', 'png'];
        $pictureExtension = explode('.', $nameFile);
        $pictureExtension = strtolower(end($pictureExtension));
        if (!in_array($pictureExtension, $validExtension)){
            echo "
                <script>
                alert('Extension not supported!')
                </script>
            ";
            return false;
        }
        
        if ($sizeFile > 2000000 ){
            echo "
                <script>
                alert('2 MB Size file max')
                </script>
            ";
            return false;
        }

        $newFile = uniqid().".".$pictureExtension;
    
        move_uploaded_file($tmpName,"$root/$newFile");

        return $newFile;
    }

    function statuss($data){
        global $db;
    $status = htmlspecialchars($data["status"]);
    $id = htmlspecialchars($data["id"]);

     //Upload Picture
    

    $query = "UPDATE problem SET status = '$status' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    }
?>