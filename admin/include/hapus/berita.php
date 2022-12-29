<?php 
$id = $_GET['id'];
if (isset($id)) {
    $sql = "DELETE FROM berita WHERE `berita`.`id_berita` = $id";
    $data = mysqli_query($koneksi, $sql);
    header("Location: index.php?include=berita&report=database telah dibuang");
} else {
    header("Location: index.php?include=berita&report=gagal menghapus database");
}
?>