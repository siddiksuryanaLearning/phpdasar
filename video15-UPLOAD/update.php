<?php
    require 'query.php';

if (isset($_POST["submit"])){
    if(edit($_POST) > 0 ){
        echo "
            // <script>
            // alert('Product suscess update');
            // document.location.href = 'index.php';
            // </script>
        
        ";
        die;
    }else{
        echo "
        <script>
        alert('Product failed update');
        document.location.href = 'index.php';
        </script>
        ";
    }   
}

$no = $_GET["no"];

$data = query("SELECT * FROM product WHERE no = $no")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="no" value="<?= $data["no"]; ?>" >
        <input type="hidden" name="oldPicture" value="<?=$data["picture"];?>">
        <ul>
            <li>
                <img src="img/<?=$data["picture"]?>" width="50"><br>
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture"> <br>
            </li>
            <br>
            <li>
                <label for="mark">Mark</label>
                <input type="text" name="mark" id="mark" value="<?=$data["mark"]?>" required> 
            </li>
            <br>
            <li>
                <label for="price">Price</label>
            </li>
                <input type="text" name="price" id="price" value="<?=$data["price"]?>" required> 
            <br>
            <li>
                <label for="madein">Made in</label>
                <input type="text" name="madein" id="madein" value="<?=$data["madein"]?>" required> 
            </li>
            <br>    
            <li>
                <label for="years">Year</label>
                <input type="text" name="years" id="years" value="<?=$data["years"]?>" required> 
            </li>
        </ul>
        <button type="submit" name="submit">Edit</button>
    </form>
</body>
</html>