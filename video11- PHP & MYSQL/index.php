<?php
    require 'query.php';
    $rows = query("SELECT * FROM product");
    
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
<h1>Halaman Produk</h1>    

<table border="1" cellpadding="20" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Picture</th>
            <th>Mark</th>
            <th>Price</th>
            <th>MadeIn</th>
            <th>Years</th>

        </tr>

        <?php foreach ($rows as $data ): ?>

        <tr>    
            <td><?=$data["no"] ?></td>
            <td><img src="<?=$data["picture"]?>" width="50"></td>
            <td><?=$data["mark"] ?></td>
            <td><?=$data["price"] ?></td>
            <td><?=$data["madein"] ?></td>
            <td><?=$data["years"] ?></td>

        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>