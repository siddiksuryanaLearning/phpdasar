<?php 
 session_start();
 if(isset($_SESSION["login"])){
     header("Location: index.php");
     exit;
 }

require 'query.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $data = mysqli_fetch_assoc($result);
        if(password_verify($password, $data["password"])){
            $_SESSION["login"] = true;
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
        </ul>
        <button type="submit" name="login">Login</button>
    </form>   
</body>
</html>