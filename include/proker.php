<?php
    $abdi = "SELECT `nama_proker`, `deskripsi` FROM `proker` WHERE `bidang`='Pengabdian'";
    $abdian = mysqli_query($koneksi, $abdi);
    $pendi = "SELECT `nama_proker`, `deskripsi` FROM `proker` WHERE `bidang`='Pendidikan'";
    $pendidikan = mysqli_query($koneksi, $pendi);

?>
<div class="container-xxl position-relative p-0">
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="admin/public/img/Logo Sosma.png" alt="Logo">
                <h1 class="m-0">sosmavoks</h1> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.php?include=beranda" class="nav-item nav-link">Beranda</a>
                        <a href="index.php?include=berita" class="nav-item nav-link">Berita</a>
                        <a href="index.php?include=proker" class="nav-item nav-link active">Program Kerja</a>
                        <a href="index.php?include=galeri" class="nav-item nav-link">Galeri</a>
                        <a href="index.php?include=periode" class="nav-item nav-link">Periode</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Sosmoy Team</a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?include=mentri" class="dropdown-item">Mentri</a>
                                <a href="index.php?include=dirjen" class="dropdown-item">Dirjen</a>
                                <a href="index.php?include=staff" class="dropdown-item">Staff Ahli</a>
                            </div>     
                        </div>
                        <a href="index.php?include=contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <!--<a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>-->
                </div>
            </nav>    
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Program Kerja</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Beranda</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="project.html">Galeri</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="contact.html">Contact us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Bidang <span></span></p>
                    <h1 class="text-center mb-5">Pendidikan</h1>
                </div>
                <div class="row g-4">
                    <?php while ($r = mysqli_fetch_row($pendidikan)) { ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-solid fa-school fa-2x"></i>
                                </div>
                                <h5 class="mb-3"><?php echo $r[0] ?></h5>
                                <div class="m-0"><?php print $r[1] ?></div>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>           
                    <?php } ?>
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary justify-content-center"><span></span>Bidang <span></span></p>
                        <h1 class="text-center mb-5">Pengabdian</h1>
                    </div>
                    <?php while ($k = mysqli_fetch_row($abdian)) { ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-solid fa-school fa-2x"></i>
                                </div>
                                <h5 class="mb-3"><?php echo $k[0] ?></h5>
                                <div class="m-0"><?php print $k[1] ?></div>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>           
                    <?php } ?>
                </div>
            </div>
        </div>