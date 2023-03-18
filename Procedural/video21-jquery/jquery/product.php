<?php
require "../query.php";
$keyword = $_GET["keyword"];
$number = 1;
$productQuery = query("SELECT * FROM product 
WHERE 
mark LIKE '%$keyword%' OR
price LIKE '%$keyword%' OR
madein LIKE '%$keyword%' OR
years LIKE '%$keyword%' 
");
?>

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

        <?php foreach ($productQuery as $data ): ?>
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