<?php session_start();
?>
<?php include('../koneksi/koneksi.php'); ?>
        <?php if (isset($_GET['include'])) {
            $include = $_GET["include"];
            if ($include=='konfir-anggota') {
                include('include/konfirmasi/anggota.php');
            } elseif ($include=='login') {
                include('include/login/konfirmasilogin.php');
            } elseif ($include=='logout') {
                include('include/login/logout.php');
            } elseif ($include=='konfir-berita') {
                include('include/konfirmasi/berita.php');
            } elseif ($include=='konfir-periode') {
                include('include/konfirmasi/periode.php');
            } elseif ($include=='konfir-proker') {
                include('include/konfirmasi/proker.php');
            } elseif ($include=='konfir-user') {
                include('include/konfirmasi/user.php');
            } elseif ($include=='konfir-edit-anggota') {
                include('include/konfirm-edit/anggota.php');
            }   elseif ($include=='konfir-edit-berita') {
                include('include/konfirm-edit/berita.php');
            }   elseif ($include=='konfir-edit-periode') {
                include('include/konfirm-edit/periode.php');
            }   elseif ($include=='konfir-edit-proker') {
                include('include/konfirm-edit/proker.php');
            }   elseif ($include=='konfir-edit-user') {
                include('include/konfirm-edit/user.php');
            }
        }?>

        <?php if (isset($_GET['include'])) {?>
            <!DOCTYPE html>
            <html lang="en">
                <?php $include = $_GET["include"]; ?>
                    <?php if ($include=='editprofile' || $include=='addanggota' || $include=='addperiode' ||  $include=='addberita' || $include=='addproker' || $include=='adduser' || $include=='addpesan' || $include=='editanggota' || $include=='editperiode' ||  $include=='editberita' || $include=='editproker' || $include=='edituser') { ?>
                        <?php include("includes/header-add.php"); ?>
                    <?php } else { ?> 
                    <?php include("includes/header.php"); }?>
                <body>
                    <?php if (isset($_SESSION["id_user"])) {?>
                            <?php $include = $_GET["include"]; ?>
                                    <?php if ($include=='profile') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/profile.php") ?>
                                    <?php } else if ($include=='editprofile') {?>
                                        <?php include("include/edit/user.php") ?>
                                    <?php } ?>

                                    <?php if ($include=='anggota') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/anggota.php") ?>
                                    <?php } else if ($include=='addanggota') {?>
                                        <?php include("include/tambah/anggota.php") ?>
                                    <?php } else if ($include=='editanggota') {?>
                                        <?php include("include/edit/anggota.php") ?>
                                    <?php } else if ($include=='hapusanggota') {?>
                                        <?php include("include/hapus/anggota.php") ?>
                                    <?php } ?>

                                    <?php if ($include=='periode') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/periode.php") ?>
                                    <?php } else if ($include=='addperiode') {?>
                                        <?php include("include/tambah/periode.php") ?>
                                    <?php } else if ($include=='editperiode') {?>
                                        <?php include("include/edit/periode.php") ?>
                                    <?php } else if ($include=='hapusperiode') {?>
                                        <?php include("include/hapus/periode.php") ?>
                                    <?php } ?>

                                    <?php if ($include=='berita') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/berita.php") ?>
                                    <?php } else if ($include=='addberita') {?>
                                        <?php include("include/tambah/berita.php") ?>
                                    <?php } else if ($include=='editberita') {?>
                                        <?php include("include/edit/berita.php") ?>
                                    <?php } else if ($include=='hapusberita') {?>
                                        <?php include("include/hapus/berita.php") ?>
                                    <?php } ?>

                                    <?php if ($include=='proker') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/proker.php") ?>
                                    <?php } else if ($include=='addproker') {?>
                                        <?php include("include/tambah/proker.php") ?>
                                    <?php } else if ($include=='editproker') {?>
                                        <?php include("include/edit/proker.php") ?>
                                    <?php } else if ($include=='hapusproker') {?>
                                        <?php include("include/hapus/proker.php") ?>
                                    <?php } ?>

                                    <?php if ($include=='user') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/user.php") ?>
                                    <?php } else if ($include=='adduser') {?>
                                        <?php include("include/tambah/user.php") ?>
                                    <?php } else if ($include=='edituser') {?>
                                        <?php include("include/edit/user.php") ?>
                                    <?php } else if ($include=='hapususer') {?>
                                        <?php include("include/hapus/user.php") ?>
                                    <?php } ?>

                                    <?php if ($include=='pesan') { ?>
                                        <?php include("includes/sidebar.php") ?>
                                        <?php include("include/pesan.php") ?>
                                    <?php } else if ($include=='hapuspesan') {?>
                                        <?php include("include/hapus/pesan.php") ?>
                                    <?php } ?>
                    <?php } else { ?>
                        <?php header("Location:index.php") ?>
                    <?php } ?>
                </body>
                    <?php include("includes/script.php") ?>
            </html>
        <?php } else {?>
                <?php if (isset($_SESSION['id_user'])) {?>
                        <?php header("Location:index.php?include=profile") ?>
                <?php } else {?>
                    <?php header("Location:login/") ?>
                <?php }?>
        <?php } ?>
        