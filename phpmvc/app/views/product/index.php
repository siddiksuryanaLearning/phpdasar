<div class="container mt-5">
    <div class="row">
        <div class </div>
            <div class="row">
                <div class="col-6">
                    <h1 class="font-bold text-3xl">Daftar Produk</h1>
                    <a href="/add">Tambah</a>
                    <form method="post" action="http://localhost/phpmvc/public/product/search">
                        <div class="relative text-gray-600">
                            <input type="search" name="search" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" name="keyword" id="keyword">
                            <button type="submit" name="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 511.999 511.999" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M507.079 490.637l-141.1-141.1C396.321 313.444 409.599 268.161 409.599 219.999C409.599 98.691 318.907 7.999 197.599 7.999C76.291 7.999 -14.401 98.691 -14.401 219.999C-14.401 341.307 76.291 432 197.599 432c48.162 0 93.445-13.278 130.537-38.019l141.1 141.1c7.811 7.811 20.474 7.811 28.285 0C514.89 511.111 514.89 498.448 507.079 490.637zM197.599 384c-97.047 0-176-78.953-176-176s78.953-176 176-176 176 78.953 176 176S294.646 384 197.599 384z" />
                                </svg>
                            </button>
                        </div>
                    </form>

                    <?php $no = 1 ?>
                    <?php foreach ($data['pro'] as $pro) : ?>
                        <ul class="bg-gradient-to-b from-white to-blue-500 mt-4">
                            <li><span><?= $no ?>. </span><a href="detail/<?= $pro['id']; ?>">Merk : <?= $pro['merk']; ?></a><a class="ml-10" href="product/delete/<?= $pro['id']; ?>">Delete</a><a class="ml-10" href="product/edit/<?= $pro['id']; ?>">Edit</a> </li>
                        </ul>
                        <?php $no++ ?>
                    <?php endforeach ?>
                </div>
            </div>

        </div>