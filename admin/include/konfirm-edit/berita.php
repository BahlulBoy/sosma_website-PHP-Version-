<?php 
    $id = $_POST['id'];
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $waktu = "$tanggal.' '.$bulan.' '.$tahun";
    $penulis = $_POST['penulis'];
    $sql = "UPDATE `berita` SET  `judul_berita` = '$judul_berita', `isi_berita` = '$isi_berita', `penulis` = (SELECT `nim` FROM `anggota` WHERE `nama`='$penulis') WHERE `berita`.`id_berita`= $id";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=berita")
?>