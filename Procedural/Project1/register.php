
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
<div class="flex justify-center mt-40">
  <img class ="w-20"src="img/logo.jpeg" alt="">
</div>

 
<form class="max-w-lg mx-auto mt-10" method="get" action="confirm-register.php">
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="email">
      Email
    </label>
    <input class="appearance-none border rounded w-full py-3 px-3 text-blue-700 leading-tight focus:outline-none focus:shadow-outline text-lg" id="email" name="email" type="email" value="" placeholder="Enter Your Email">
  </div>
  <div class="flex items-center justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="sumbit" name="regis">
      Send
    </button>
  </div>
</form>

<div class="flex justify-center mt-6">
<h3 class="text-base text-gray-600">Already have an account ? <a href="login.php">Log in</a></h3>
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