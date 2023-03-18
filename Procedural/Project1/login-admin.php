<?php 

require 'query.php';
  
if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1){
        $data = mysqli_fetch_assoc($result);
        
       
        if ($email === "admin@gmail.com" && password_verify($password, $data["password"])){
            echo"
            <script>
                    document.location.href = 'admin.php';
            </script>
            ";
            exit;
        }
    }

    $error = true;

}?>


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
<div class="flex justify-center mt-16">
 <h3 class="text-4xl">Welcome Back Admin</h3>
</div>
<div class="flex justify-center mt-2">
        <div class="bg-white-200 px-44 rounded-lg mx-80">
            <p class ="text-gray-500">The sharing of online passwords and pin codes between friends has become a trend that aims to prove trust—a token gesture that can go dramatically wrong</p>
        </div>
    </div>
<form class="max-w-lg mx-auto mt-2" method="post" action="">
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

</body>
</html>