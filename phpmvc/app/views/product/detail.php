<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1 class="font-bold text-3xl">Detail Produk</h1>
            <?php $no = 1 ?>
            <ul class="bg-gradient-to-b from-white to-blue-500 mt-4">
                <li><span><?= $no ?>. </span>Merk : <?= $data['pro']['merk']; ?></li>
                <li class="px-4 py-2 border-b border-gray-200">Tahun : <?= $data['pro']['tahun']; ?></li>
                <li class="px-4 py-2 border-b border-gray-200">OS : <?= $data['pro']['os']; ?></li>
                <li class="px-4 py-2 border-b border-gray-200">RAM : <?= $data['pro']['ram']; ?></li><br>
            </ul>
            <?php $no++ ?>
            <a href="http://localhost/phpmvc/public/product/">Kembali</a>
        </div>
    </div>

</div>