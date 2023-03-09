<?php
    $db = mysqli_connect('localhost', 'root','','db_fattah');
    
    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $data = [];
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        return $data;
    }

    function add_product($data){
        global $db;
        $picture = upload();
        if (!$picture){
            return false;
        }
    $mark = htmlspecialchars($data["mark"]);
    $price = htmlspecialchars($data["price"]);
    $madein = htmlspecialchars($data["madein"]);
    $years = htmlspecialchars($data["years"]);

     //Upload Picture
    

    $query = "INSERT INTO product VALUES (NULL, '$picture', '$mark', '$price', '$madein', '$years')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    }

    function upload(){
        $nameFile = $_FILES['picture']['name'];
        $sizeFile = $_FILES['picture']['size'];
        $error = $_FILES['picture']['error'];
        $tmpName = $_FILES['picture']['tmp_name'];
        $root = '/opt/lampp/htdocs/phpdasar/phpdasar/video15-UPLOAD/img';

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

        move_uploaded_file($tmpName,"$root/$nameFile");

        return $nameFile;
    }

    function delete($no){
        global $db;
        mysqli_query($db, "DELETE FROM product WHERE no = $no");
        return mysqli_affected_rows($db);   
    }

    function edit($data){
        global $db;
    $no = $data["no"];    
    $picture = htmlspecialchars($data["picture"]);
    $mark = htmlspecialchars($data["mark"]);
    $price = htmlspecialchars($data["price"]);
    $madein = htmlspecialchars($data["madein"]);
    $years = htmlspecialchars($data["years"]);
    $query = "UPDATE product SET picture = '$picture', mark = '$mark', price = '$price', madein = '$madein', years = '$years' WHERE no = $no";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    }

    function search($keyword){
        $query = "SELECT * FROM product 
            WHERE 
            mark LIKE '%$keyword%' OR
            price LIKE '%$keyword%' OR
            madein LIKE '%$keyword%' OR
            years LIKE '%$keyword%' 
        ";
        return query($query);         
    }
?>