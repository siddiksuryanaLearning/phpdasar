<?php 

require 'query.php';

 session_start();

 if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //id
    $result = mysqli_query("SELECT username FROM users WHERE id = $id");

    //keluarin data
    $rows = mysqli_fetch_assoc($result);

    //cek cookies dan username
    if($key === hash('sha256', $rows['username'])){
        $_SESSION['login'] = true; 
    }

 }   

 if(isset($_SESSION["login"])){
     header("Location: index.php");
     exit;
 }



if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $data = mysqli_fetch_assoc($result);
        if(password_verify($password, $data["password"])){
            $_SESSION["login"] = true;
            if(isset($_POST['remember'])){
                setcookie('id', $data['id'], time()+60);
                setcookie('key', hash('sha256', $data['username']), time()+60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
     <h1>Halaman Login</h1>

     <?php if(isset($error)) : ?> 
        <p style="color: red; font-style: italic;">username / password salah</p>
     <?php endif ?>

     <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required> <br>
            </li>
            <br>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required> 
            </li>
            <br>
            <li>
                <input type="checkbox" name="remember" id="remember" required> 
                <label for="remember">Remember Me</label>
            </li>
        </ul>
        <button type="submit" name="login">Login</button>
    </form>   
</body>
</html>