<?php 
    $id = $_POST['id'];
    $foto = $_POST['foto'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $waktu = $tanggal." ".$bulan." ".$tahun;
    $prodi = $_POST['prodi'];
    $periode = $_POST['periode'];
    $jabatan = $_POST['jabatan'];
    $nama_jabatan = $_POST['nama_jabatan'];
    
    if (isset($_FILES['image']['name'])) {
        $nama_foto = $_FILES['image']['name'];
        $tmp_foto = $_FILES['image']['tmp_name'];
        unlink('public/img/foto anggota/'.$foto);
        $sql = "UPDATE `anggota` SET  `nama` = '$nama', `tanggal_lahir` = '$waktu', `prodi` = (SELECT `id_periode` FROM `periode` WHERE `nama_periode`='$periode'), `jabatan` = '$jabatan', `nama_jabatan` = '$nama_jabatan', `foto_user` = '$nama_foto' WHERE `anggota`.`nim` = $id;";
        move_uploaded_file($tmp_foto, "public/img/foto anggota/".$nama_foto);
        mysqli_query($koneksi, $sql);
        header('Location:index.php?include=anggota');
    } else {
        $sql = "UPDATE `anggota` SET  `nama` = '$nama', `tanggal_lahir` = '$waktu, `prodi` = (SELECT `id_periode` FROM `periode` WHERE `nama_periode`='$periode'), `jabatan` = '$jabatan', `nama_jabatan` = '$nama_jabatan' WHERE `anggota`.`nim` = $id;";
        mysqli_query($koneksi, $sql);
        header('Location:index.php?include=anggota');
    }
?>