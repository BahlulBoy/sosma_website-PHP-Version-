<?php 
    $id = $_POST['id'];
    $foto = $_POST['foto'];
    $nama_proker = $_POST['nama_proker'];
    $mtanggal = $_POST['mtanggal'];
    $mbulan = $_POST['mbulan'];
    $mtahun = $_POST['mtahun'];
    $stanggal = $_POST['stanggal'];
    $sbulan = $_POST['sbulan'];
    $stahun = $_POST['stahun'];
    $waktu = $mtanggal." ".$mbulan." ".$mtahun." - ".$stanggal." ".$sbulan." ".$stahun;
    $lokasi = $_POST['lokasi_proker'];
    $deskripsi = $_POST['deskripsi'];
    $bidang = $_POST['bidang'];
    $penanggungjawab = $_POST['penanggung_jawab'];
    $periode = $_POST['periode'];
    if (isset($_FILES['image']['name'])) {
        $nama_foto = $_FILES['image']['name'];
        $tmp_foto = $_FILES['image']['tmp_name'];
        unlink('/public/img/dokumentasi/'.$foto);
        $sql = "UPDATE `proker` SET  `nama_proker` = '$nama_proker', `tanggal` = '$waktu', `deskripsi` = '$deskripsi', `bidang` = '$bidang', `penanggungjawab` = (SELECT `nim` FROM `anggota` WHERE `nama`='$penanggungjawab'), `dokumentasi` = '$nama_foto' WHERE `proker`.`nama_proker` = '$id';";
        move_uploaded_file($tmp_foto, "public/img/dokumentasi/".$nama_foto);
        mysqli_query($koneksi, $sql);
        header('Location:index.php?include=proker');
    } else {
        $sql = "UPDATE `proker` SET  `nama_proker` = '$nama_proker', `tanggal` = '$waktu', `deskripsi` = '$deskripsi', `bidang` = '$bidang', `penanggungjawab` = (SELECT `nim` FROM `anggota` WHERE `nama`='$penanggungjawab') WHERE `proker`.`nama_proker` = '$id';";
        mysqli_query($koneksi, $sql);
        header('Location:index.php?include=proker');
    }
?>