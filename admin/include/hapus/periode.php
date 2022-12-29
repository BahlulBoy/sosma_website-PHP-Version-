<?php 
$id = $_GET['id'];
if (isset($id)) {
    $sql = "DELETE FROM periode WHERE `periode`.`id_periode` = $id";
    $data = mysqli_query($koneksi, $sql);
    header("Location: index.php?include=periode&report=database telah dibuang");
} else {
    header("Location: index.php?include=periode&report=gagal menghapus database");
}
?>