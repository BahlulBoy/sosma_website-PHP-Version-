<?php include("koneksi/koneksi.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head.php"); ?>
</head>
<body>
    <?php include("includes/top-body.php") ?>
    <?php if (isset($_GET['include'])) {
        $include = $_GET['include'];
        if ($include == 'beranda') {
            include("include/main.php");
        } elseif ($include == 'berita') {
            include("include/berita.php");
        } elseif ($include == 'proker') {
            include("include/proker.php");
        } elseif ($include == 'galeri') {
            include("include/galeri.php");
        } elseif ($include == 'periode') {
            include("include/periode.php");
        } elseif ($include == 'mentri') {
            include("include/mentri.php");
        } elseif ($include == 'dirjen') {
            include("include/dirjen.php");
        } elseif ($include == 'staff') {
            include("include/staff.php");
        } elseif ($include == 'contact') {
            include("include/contact.php");
        } elseif ($include == 'konfirmasi-pesan') {
            include("include/konfirmasipesan.php");
        } else {
            header("Location:index.php?include=beranda");
        }   
    } else {
        header("Location:index.php?include=beranda");
    }?>
    <?php include("includes/bot-body.php") ?>
    <?php include("includes/script.php") ?>
</body>
</html>