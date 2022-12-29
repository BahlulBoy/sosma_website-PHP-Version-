<?php 
    $tahun = $_POST['tahun'];
    $nama_periode = $_POST['nama_periode'];
    $sql = "INSERT INTO `periode` (`tahun`,`nama_periode`) VALUES ('$tahun','$nama_periode')";
    mysqli_query($koneksi, $sql);
    header('Location:index.php?include=periode');
?>