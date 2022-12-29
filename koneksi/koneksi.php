<?php
$koneksi = mysqli_connect("localhost","root","","web_organisasi");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>