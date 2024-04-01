
<?php 
//include atau include_once --> untuk manggil file
// require --> tidak dapat di-bypass, jika gagal akan menampilkan error (hanya berfungsi sebagai validasi)
// require_once --> hanya dapat di-load satu kali saja, jika sudah ada maka akan tidak bisa lagi memanggilnya lagi. Jika gagal
// die() --> fungsi mati script php, jika ada die() maka  script php selanjutnya tidak akan terpanggil.
// menggabungkan beberapa file menggunakan include

include "atas.php";
include "isi.php";
include "bawah.php";

?>