<?php 
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $waktu = $tanggal." ".$bulan." ".$tahun;
    $penulis = $_POST['penulis'];
    $sql = "INSERT INTO `berita` (`judul_berita`,`isi_berita`,`tanggal_berita`,`penulis`) VALUES ('$judul_berita','$isi_berita','$waktu',(SELECT `nim` FROM `anggota` WHERE `nama`='$penulis'))";
    mysqli_query($koneksi, $sql);
    header('Location:index.php?include=berita');
?>