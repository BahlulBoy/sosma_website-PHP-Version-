<?php 
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
    $nama_foto = $_FILES['image']['name'];
    $tmp_foto = $_FILES['image']['tmp_name'];
    $periode = $_POST['periode'];
    $sql = "INSERT INTO `proker` (`nama_proker`,`tanggal`,`lokasi`,`deskripsi`, `bidang`, `penanggungjawab` ,`dokumentasi` ,`periode`) VALUES ('$nama_proker','$waktu','$lokasi','$deskripsi','$bidang',(SELECT `nim` FROM `anggota` WHERE `nama`='$penanggungjawab'),'$nama_foto',(SELECT `id_periode` FROM `periode` WHERE `nama_periode`='$periode'))";
    mysqli_query($koneksi, $sql);
    move_uploaded_file($tmp_foto, "public/img/dokumentasi/".$nama_foto);
    header('Location:index.php?include=proker');
?>