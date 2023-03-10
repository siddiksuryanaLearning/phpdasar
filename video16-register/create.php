<?php
    require 'query.php';
    //connect to database
    // $db = mysqli_connect("localhost", "root", "", "db_fattah");


if (isset($_POST["submit"])){
    //get data from database & insert into variable 
    
    if(add_product($_POST) > 0 ){
        echo "
            <script>
            alert('Product suscess added');
            document.location.href = 'index.php';
            </script>
        
        ";
    }else{
        echo "
        <script>
        alert('Product failed added');
        document.location.href = 'index.php';
        </script>
        ";
    }
       
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="" method="post" enctype="multipart/form-data" >
        <ul>
            <li>
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture"> <br>
            </li>
            <br>
            <li>
                <label for="mark">Mark</label>
                <input type="text" name="mark" id="mark" required> 
            </li>
            <br>
            <li>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" required> 
            </li>
            <br>
            <li>
                <label for="madein">Made in</label>
                <input type="text" name="madein" id="madein" required> 
            </li>
            <br>    
            <li>
                <label for="years">Year</label>
                <input type="text" name="years" id="years" required> 
            </li>
        </ul>
        <button type="submit" name="submit">Add</button>
    </form>
</body>
</html>