<?php
    $db = mysqli_connect('localhost', 'root','','db_fattah');
    
    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $data = [];
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        return $data;
    }

    function add_product($data){
        global $db;
    $picture = htmlspecialchars($data["picture"]);
    $mark = htmlspecialchars($data["mark"]);
    $price = htmlspecialchars($data["price"]);
    $madein = htmlspecialchars($data["madein"]);
    $years = htmlspecialchars($data["years"]);
    $query = "INSERT INTO product VALUES (NULL, '$picture', '$mark', '$price', '$madein', '$years')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    }

    function delete($no){
        global $db;
        mysqli_query($db, "DELETE FROM product WHERE no = $no");
        return mysqli_affected_rows($db);   
    }

    function edit($data){
        global $db;
    $no = $data["no"];    
    $picture = htmlspecialchars($data["picture"]);
    $mark = htmlspecialchars($data["mark"]);
    $price = htmlspecialchars($data["price"]);
    $madein = htmlspecialchars($data["madein"]);
    $years = htmlspecialchars($data["years"]);
    $query = "UPDATE product SET picture = '$picture', mark = '$mark', price = '$price', madein = '$madein', years = '$years' WHERE no = $no";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    }

    function search($keyword){
        $query = "SELECT * FROM product 
            WHERE 
            mark LIKE '%$keyword%' OR
            price LIKE '%$keyword%' OR
            madein LIKE '%$keyword%' OR
            years LIKE '%$keyword%' 
        ";
        return query($query);         
    }
?>