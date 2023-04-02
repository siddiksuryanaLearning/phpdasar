 <div class="w-5/6 bg-white-400 p-4 rounded-lg">
     <div class="flex flex-col justify-center items-center">
         <?php Flasher::flash(); ?>
         <p class="text-4xl mt-6">Tambah Pasien</p>
         <div class="w-full max-w-md mx-auto">
             <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                 <div class="mb-4">
                     <!-- <input type="hidden" id="date" name="date" value="date_default_timezone_set('UTC')"> -->
                     <label class="block text-gray-700 font-bold mb-2" for="nik">
                         Merk
                     </label>
                     <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="merk" name="merk" value="<?= $data['merk'] ?>" type="text" placeholder="Masukkan Merk">
                 </div>
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="nama">
                         Tahun
                     </label>
                     <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tahun" name="tahun" type="text" placeholder="Masukkan Tahun">
                 </div>
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="email">
                         Os
                         <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="os" name="os" type="text" placeholder="Masukkan Os">
                     </label>
                 </div>
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="alamat">
                         Ram
                     </label>
                     <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ram" name="ram" placeholder="Masukkan Ram"></textarea>
                 </div>
                 <div class="flex items-center justify-between">
                     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                         Simpan
                     </button>
                 </div>
             </div>
         </div>
     </div>
 </div>