<?php 
$per = "SELECT `tahun`, `nama_periode` FROM `periode`";
$peri = mysqli_query($koneksi, $per);
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
                        <a href="index.php?include=proker" class="nav-item nav-link">Program Kerja</a>
                        <a href="index.php?include=galeri" class="nav-item nav-link ">Galeri</a>
                        <a href="index.php?include=periode" class="nav-item nav-link active">Periode</a>
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
                            <h1 class="text-white animated slideInDown">Periode</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/galeri">Galeri</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="/contact">Contact</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4 class">
                    <?php while($data=mysqli_fetch_row($peri)) { ?>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                                <h5 class="mb-3">Periode <?php echo $data[0] ?></h5>
                                <p class="m-0" align="center">Kabinet <?php echo $data[1] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-search text-primary mb-4"></i>
                            <h5 class="mb-3">Periode 2023</h5>
                            <p class="m-0" align="center">Coming soon
                            </p>
                        </div>
                    </div>
            </div>
        </div>