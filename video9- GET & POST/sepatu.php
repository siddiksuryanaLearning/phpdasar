<?php
if (
    !isset($_GET['nama'])||
    !isset($_GET['harga'])||
    !isset($_GET['produksi'])||
    !isset($_GET["tahun"])||
    !isset($_GET["gambar"])){
    header("Location: get.php");
    exit;
};
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
    <h1><?=$_GET["nama"]?></h1>
    <ul>
        <img src="img/<?=$_GET["gambar"];?>">
        <li>Merk : <?=$_GET["nama"];?></li>  
        <li>Harga : <?=$_GET["harga"];?></li>  
        <li>Produksi : <?=$_GET["produksi"];?></li>  
        <li>Tahun : <?=$_GET["tahun"];?></li>  

    </ul>
</body>
</html>