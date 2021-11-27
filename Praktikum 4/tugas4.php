<?php
function cari($array, $cari) {
    if (in_array($cari, $array, true)) {
        echo "$cari Ada Pada Array <br>";
      } else {
        echo "$cari Tidak Ada Pada Array <br>";
      }    
  }
  $array = ['Sen' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
  cari($array,'Senin');

  cari($array,'Toyota');
?>