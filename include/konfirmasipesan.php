<?php 
$nama = $_POST['nama'];
$emai = $_POST['email'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
if ($nama && $email && $judul && $isi) {
    $sql = "INSERT INTO `contact`(`id`, `nama`, `email`, `judul`, `isi`) VALUES (NULL,'$nama','$emai','$judul','$isi');";
    $re = mysqli_query($koneksi, $sql);
    header("Location:index.php?include=contact");
} else {
    header("Location:index.php?include=contact");
}
?>