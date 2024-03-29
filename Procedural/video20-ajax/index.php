<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    require 'query.php';
    $rows = query("SELECT * FROM product");
    $number = 1;

    //pagination
    $dataLimit = query("SELECT * FROM users LIMIT 0, 2");

    if(isset($_POST["search"])){
        $rows = search($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Toko Sepatu</title>
</head>
<body>
<button> <a href="logout.php">Log Out</a></button><br><br>
<h1>Daftar Produk</h1>

<button> <a href="create.php">Add Product</a></button><br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Enter Keyword" autocomplte="off" id="keyword">
    <button type="submit" name="search" id="search-button">Search</button>

</form>
<div id="container" >   
<table border="1" cellpadding="20" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Picture</th>
            <th>Mark</th>
            <th>Price</th>
            <th>MadeIn</th>
            <th>Years</th>
            <th>Action</th>

        </tr>

        <?php foreach ($rows as $data ): ?>
        <tr>    
            <td><?=$number?></td>
            <td><img src="img/<?=$data["picture"]?>" width="50"></td>
            <td><?=$data["mark"] ?></td>
            <td><?=$data["price"] ?></td>
            <td><?=$data["madein"] ?></td>
            <td><?=$data["years"] ?></td>
            <td><button> <a href="update.php?no=<?=$data["no"]?>">Edit</a></button> | <button><a href="delete.php?no=<?= $data["no"];?>">Delete</a></td></button>
        </tr>
        <?= $number++;?> 
        <?php endforeach ?> 
    </table>
    </div>
    <script src="ajax/script.js"></script>
</body>
</html>