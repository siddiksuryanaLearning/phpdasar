<?php 
 session_start();
 if(!isset($_SESSION["login"])){
     header("Location: login.php");
     exit;
 }

    require 'query.php';
    $no = $_GET["no"];

    if(delete($no)>0){
        echo "
        <script>
        alert('data deleted');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data failed');
        document.location.href = 'index.php';
        </script>
        ";
    }
?>