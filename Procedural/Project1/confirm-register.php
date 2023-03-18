<?php 
    require'query.php';
    
            
    if (isset($_POST["regis"])){
      
        
        if(register($_POST) > 0 ){
            echo "
                <script>
                alert('Register Success');
                document.location.href = 'dasboard.php';
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
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<!-- Kontainer untuk paragraf pertama -->
<div class="flex justify-center mt-10">
  <img class ="w-20"src="img/logo.jpeg" alt="">
</div>

 
<form class="max-w-lg mx-auto mt-10" method="post" action="">
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="email">
      Email
    </label>
    <input class="appearance-none border bg-slate-100 rounded w-full py-3 px-3 text-blue-700 leading-tight focus:outline-none focus:shadow-outline text-lg" id="email" name="email" value="<?=$_GET["email"];?> "type="email" placeholder="Enter Your Email" readonly>
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="password">
      Password
    </label>
    <input class="appearance-none border rounded w-full py-3 px-3 text-blue-700 leading-tight focus:outline-none focus:shadow-outline text-lg " id="password" name="password" type="password" placeholder="Enter Your Password" autofocus>
  
  </div><div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="password2">
      Confirm Password
    </label>
    <input class="appearance-none border rounded w-full py-3 px-3 text-blue-700 leading-tight focus:outline-none focus:shadow-outline text-lg" id="password2" name="password2" type="password" placeholder="Enter Your Confirm Password">
  </div>
  <div class="flex items-center justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="sumbit" name="regis">
      Register
    </button>
    <button class="bg-blue-500 ml-10 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="button">
      <a href="register.php">Back</a>
    </button>
  </div>
</form>

<div class="flex justify-center mt-6">
<h3 class="text-base text-gray-600">Already have an account ? <a href="login.php"><span class="text-blue-600">Log in<span></a></h3>
</div>
<div class="flex justify-center mt-6">
  <p>____________</p>
              <span>OR</span>
              <p>____________</p> 
            </div>
<div class="flex justify-center mt-6">
<button class="bg-white rounded-lg shadow-md py-3 px-6 flex items-center justify-center text-gray-800 border">
  <i class="fab fa-google mr-4"></i>
  <span>Register with Google</span>
</button>
</div>



</body>
</html>