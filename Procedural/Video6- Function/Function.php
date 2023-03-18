<?php
    function greeting($people){
        $waktu = date('h:i:s');
        echo "waktu sekarang : $waktu <br>";
        if ($waktu < date('10:00:00')){
            return "Selamat pagi, $people";
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
    <h1><?php echo greeting("Jo") ?></h1>
</body>
</html>