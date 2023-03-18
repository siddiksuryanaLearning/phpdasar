<?php 

require 'query.php';

 session_start();

 if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //id
    $result = mysqli_query("SELECT email FROM users WHERE id = $id");

    //keluarin data
    $rows = mysqli_fetch_assoc($result);

    //cek cookies dan email
    if($key === hash('sha256', $rows['email'])){
        $_SESSION['login'] = true; 
    }

 }   

 if(isset($_SESSION["login"])){
     header("Location: dasboard.php");
     exit;
 }



if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1){
        $data = mysqli_fetch_assoc($result);
        if(password_verify($password, $data["password"])){
            $_SESSION["login"] = true;
            if(isset($_POST['remember'])){
                setcookie('id', $data['id'], time()+60);
                setcookie('key', hash('sha256', $data['email']), time()+60);
            }

            header("Location: dasboard.php");
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
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>

<!-- Kontainer untuk paragraf pertama -->
<div class="flex justify-center mt-10">
  <img class ="w-20"src="img/logo.jpeg" alt="">
</div>

<!-- Kontainer untuk paragraf kedua -->
<div class="flex justify-center mt-20">
 <h3 class="text-4xl">Welcome Back</h3>
</div>

<form class="max-w-lg mx-auto mt-10" method="post" action="">
<?php if(isset($error)) : ?> 
        <p style="color: red; font-style: italic;">Email or Password wrong!</p>
     <?php endif ?><br>
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="email">
      Email
    </label>
    <input class="appearance-none border rounded w-full py-3 px-3 text-blue-700 leading-tight focus:outline-none focus:shadow-outline text-lg" id="email" type="email" name="email" placeholder="Enter Your Email">
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="password">
      Password
    </label>
    <input class="appearance-none border rounded w-full py-3 px-3 text-blue-700 leading-tight focus:outline-none focus:shadow-outline text-lg" id="password" type="password" name="password" placeholder="Enter Your Password">
  </div>
  <div class="flex items-center justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="submit" name="login">
      Send
    </button>
  </div>
  <input type="checkbox" name="remember" id="remember"> 
                <label for="remember">Remember Me</label>
</form>


<div class="flex justify-center mt-6">
<h3 class="text-base text-gray-600">Don't have an account ? <a href="register.php">Register</a></h3>
</div>
<div class="flex justify-center mt-6">
  <p>____________</p>
              <span>OR</span>
              <p>____________</p> 
            </div>
<div class="flex justify-center mt-6">
<button class="bg-white rounded-lg shadow-md py-3 px-6 flex items-center justify-center text-gray-800 border">
  <i class="fab fa-google mr-4"></i>
  <span>Login with Google</span>
</button>
</div>
</body>
</html>