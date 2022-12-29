<?php
$id = $_GET['id'];
if (isset($id)) {
    $b = "SELECT `foto` FROM `anggota` WHERE `anggota`.`nim`='$id'";
    $myg = mysqli_query($koneksi, $b);
    while ($data = mysqli_fetch_row($myg)) {
        $foto = $data[0];
    }
    unlink("public/img/foto anggota/".$foto);
    $sql = "DELETE FROM anggota WHERE `anggota`.`nim` = '$id'";
    $query = mysqli_query($koneksi, $sql);
    header("Location: index.php?include=anggota&report=database telah dihapus");
} else {
    header("Location: index.php?include=anggota&report=gagal menghapus");
}
?>