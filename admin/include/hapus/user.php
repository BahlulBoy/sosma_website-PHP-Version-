<?php 
$id = $_GET['id'];
if (isset($id)) {
    $sql = "DELETE FROM user WHERE `user`.`id`='$id'";
    $data = mysqli_query($koneksi, $sql);
    header("Location: index.php?include=user&report=database telah dibuang");
} else {
    header("Location: index.php?include=user&report=gagal menghapus database");
}
?>