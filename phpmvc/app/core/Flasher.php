<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $color)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'color' => $color,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="bg-' . $_SESSION['flash']['color'] . '-100 border-t-4 border-' . $_SESSION['flash']['color'] . '-500 rounded-b text-' . $_SESSION['flash']['color'] . '-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-' . $_SESSION['flash']['color'] . '-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a.5.5 0 0 1 0 .707l-8 8a.5.5 0 0 1-.707 0l-8-8a.5.5 0 1 1 .707-.707L5 12.293l8.348-8.348a.5.5 0 0 1 .707 0z"/></svg></div>
    <div>
      <p class="font-bold">' . $_SESSION['flash']['pesan'] . '</p>
      <p class="text-sm"></p>
    </div>
    <div class="ml-auto pl-3">
      <div class="-mx-1.5 -my-1.5">
        <button class="inline-flex rounded-md p-1.5 text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500" onclick="closeAlert()">
          <span class="sr-only">Close</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
        </button>
      </div>
    </div>
  </div>
</div>
 ';



            unset($_SESSION['flash']);
        }
    }
}
