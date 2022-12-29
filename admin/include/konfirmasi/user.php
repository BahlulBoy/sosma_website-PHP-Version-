<?php 
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama_foto = $_FILES['image']['name'];
    $tmp_foto = $_FILES['image']['tmp_name'];
    $sql = "INSERT INTO `user` (`nama`,`username`,`email`,`password`, `foto_user`) VALUES ('$nama','$username','$email',MD5('$password'),'$nama_foto')";
    mysqli_query($koneksi, $sql);
    move_uploaded_file($tmp_foto, "public/img/profile/".$nama_foto);
    header('Location:index.php?include=user');
?>