<?php
        $img = $_POST['img'];
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['tanggal'];
        
        if (isset($_FILES['image']['name'])) {
            unlink('public/img/profile/'.$img);
            $nama_foto = $_FILES['image']['name'];
            $tmp_foto = $_FILES['image']['tmp_name'];
            $sql = "UPDATE `user` SET  `nama` = '$nama', `username` = '$username', `email` = '$email', `password` = MD5('$password'), `foto_user` = '$nama_foto' WHERE `user`.`id` = $id;";
            move_uploaded_file($tmp_foto, "public/img/profile/".$nama_foto);
            mysqli_query($koneksi, $sql);
            header('Location:index.php?include=user');
        } else {
            $sql = "UPDATE `user` SET  `nama` = '$nama', `username` = '$username', `email` = '$email', `password` = MD5('$password') WHERE `user`.`id` = $id;";
            mysqli_query($koneksi, $sql);
            header('Location:index.php?include=user');
        }
?>