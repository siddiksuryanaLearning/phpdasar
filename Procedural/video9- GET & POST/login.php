<?php
    if(isset($_POST["submit"])){
        if ($_POST["mahasiswa"] == "admin" && $_POST["password"] == "123" && $_POST["nim"] == "123"){
            header("Location: dasboard.php");
            $verify = true;
        }else{
            $error = true;
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ( isset($error)) : ?>
        <p> Nama Mahasiswa / Password / NIM salah</p>
    <?php endif;?>    
    <form method="post" 
    <?php if(isset($verify)): ?>  
    action="dasboard.php"
    <?php endif;?> 
    >
    <label for="mahasiswa">Nama Mahasiswa</label>
    <input type="text" name="mahasiswa" id="mahasiswa" placeholder="Masukkan masukan data"><br><br>
    <label for="nim">Nim</label>
    <input type="number" name="nim" id="nim" placeholder="Masukkan masukan data"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="" placeholder="Masukkan password"><br><br>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>