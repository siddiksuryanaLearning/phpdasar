<?php 
    require'query.php';

    if (isset($_POST["regis"])){
        
        if(register($_POST) > 0 ){
            echo "
                <script>
                alert('user suscess added');
                </script>
            
            ";
        }else{
            echo mysqli_error($db);
        }
           
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Welcome, join Register</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" require> <br>
            </li>
            <br>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required> 
            </li>
            <br>
            <li>
                <label for="password2">Confrim Password</label>
                <input type="password" name="password2" id="password2" required> 
                </li>
            <br>
        </ul>
        <button type="submit" name="regis">Register</button>
    </form>
    
</body>
</html>