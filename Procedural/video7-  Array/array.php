<?php
    $users = ['john', 'dave', 'tim'];
    $bulan = ['Januari, Febuari, Maret, April, Mei, Juni, Juli, Agustus, September, Okotober, November, Desember'];
    $biodata = [ ['Ani', 'Bandung', 'Sadang Serang'], ['Entis', 'Bandung', 'Jawa Barat']];

    $i = 0;
    
    while($i < count($users))
    {
        echo "No.". $i+1 ." $users[$i]"."<br>";
        $i++;
    }

    foreach($bulan as $loop){
        echo "$loop <br>";
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
    <h1>Biodata Keluarga</h1>
    <ul>
        <?php foreach($biodata as $arr) : ?>
            <li><?php echo $arr[0] ?></li>
            <li><?php echo $arr[1] ?></li>
            <li><?php echo $arr[2] ?></li>
            <br>
        <?php endforeach ?>
        

    </ul>
    

</body>
</html>
