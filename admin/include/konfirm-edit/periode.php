<?php 
    $id = $_POST['id'];
    $tahun = $_POST['tahun'];
    $nama_periode = $_POST['nama_periode'];
    $sql = "UPDATE `periode` SET  `tahun` = '$tahun', `nama_periode` = '$nama_periode' WHERE `periode`.`id_periode` = $id;";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=periode")
?>