<?php 
$id = $_GET['id'];
if (isset($id)) {
    $sql = "DELETE FROM `contact` WHERE `contact`.`id`='$id'";
    $data = mysqli_query($koneksi, $sql);
    header("Location: index.php?include=proker&report=database telah dibuang");
} else {
    header("Location: index.php?include=proker&report=gagal menghapus database");
}
?>