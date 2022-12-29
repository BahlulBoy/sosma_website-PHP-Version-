<?php 
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $waktu = $tanggal." ".$bulan." ".$tahun;
    $prodi = $_POST['prodi'];
    $periode = $_POST['periode'];
    $jabatan = $_POST['jabatan'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $nama_foto = $_FILES['image']['name'];
    $tmp_foto = $_FILES['image']['tmp_name'];
    $sql = "INSERT INTO `anggota` (`nim`,`nama`,`tanggal_lahir`,`prodi`, `periode`, `jabatan` ,`nama_jabatan` ,`foto`) VALUES ('$nim','$nama','$waktu','$prodi',(SELECT `id_periode` FROM `periode` WHERE `nama_periode`='$periode'),'$jabatan','$nama_jabatan' ,'$nama_foto')";
    mysqli_query($koneksi, $sql);
    move_uploaded_file($tmp_foto, "public/img/foto anggota/".$nama_foto);
    header('Location:index.php?include=anggota');
?>