<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Guest Book</title>
</head>
<body>
<div class="flex justify-center mt-60">
  <img class ="w-20"src="img/logo.jpeg" alt="">
</div>
<div class="flex justify-center mt-4">
<p class="mx-12" >Welcome to <span class="text-blue-700  font-bold"> GuestBook<span></p>
</div>
<div class="flex justify-center mt-4">
<p class="mx-2" >Choose "Guest", To continue</p>
</div>

<div class="grid place-items-center">
  <div class="bg-white-200 p-4 place-items-center">
    <div class="flex items-center justify-center">
    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-6 flex justify-center items-center rounded"> <a href="login-admin.php?">Admin</a></button>
   <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 flex justify-center items-center rounded"><a href="register.php?">Guest</a></button>
  </div>
    
</div>
</div>
</body>
</html>