
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $sepatu = 
        [
            [
                "id"=>1, 
                "nama"=>"Sepatu Nike",
                "harga"=>"$100",
                "produksi"=>"China",
                "tahun"=>2000,
                "gambar"=>"Fedora.jpeg"
            ],
            [
                "id"=>2 ,
                "nama"=>"Fedora",
                "harga"=>"$70",
                "produksi"=>"Brazil",
                "tahun"=>2001,
                "gambar"=>"nike.jpeg"
            ],
            [
                "id"=>3,
                "nama"=>"Sport",
                "harga"=>"$60",
                "produksi"=> "Jakarta",
                "tahun"=>2009,
                "gambar"=>"sport.jpeg"

            ],[
                "id"=> 4,
                "nama"=> "Speed",
                "harga"=> "$20",
                "produksi"=> "Germany",
                "tahun"=>2001,
                "gambar"=>"edora.jpeg"

            ],[
                "id"=> 5,
                "nama"=> "Edora",
                "harga"=> "$10",
                "produksi"=> "Italy",
                "tahun"=>2002,
                "gambar"=>"speed.jpeg"

            ],
        ]
    ?>
    <?php foreach($sepatu as $arr) : ?>
        <ul>
            <img src="img/<?=$arr["gambar"]?>">
            <li>Id : <?=$arr["id"]?></li>
            <li>Nama : <a href="sepatu.php?gambar=<?=$arr["gambar"];?>&nama=<?=$arr["nama"];?>&harga=<?=$arr["harga"];?>&produksi=<?=$arr["produksi"];?>&tahun=<?=$arr["tahun"];?>"> <?=$arr["nama"]?></a></li>
            <li>Harga : <?=$arr["harga"]?></li>
            <li>Produksi : <?=$arr["produksi"]?></li>
            <li>Tahun : <?=$arr["tahun"]?></li>
        </ul>
    <?php endforeach; ?>    
</body>
</html>