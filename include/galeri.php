<?php 
    $snl = "SELECT `dokumentasi`, `nama_proker`, `tanggal` FROM `proker`";
    $foto_proker = mysqli_query($koneksi, $snl);
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
                        <a href="index.php?include=galeri" class="nav-item nav-link active">Galeri</a>
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
                            <h1 class="text-white animated slideInDown">Dokumentasi</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Beranda</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="project.html">dokumentasi</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="contact.html">Contact us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Sosmavoks 2022!<span></span></p>
                    <h1 class="text-center mb-5">Proker Recaps!</h1>
                </div>
                <div class="row g-4 portfolio-container">
                    <?php while($data = mysqli_fetch_row($foto_proker)) { ?>
                        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="admin/public/img/dokumentasi/<?php echo $data[0] ?>" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="admin/public/img/dokumentasi/<?php echo $data[0] ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2"><?php echo $data[2] ?></p>
                                    <h5 class="lh-base mb-0"><?php echo $data[1] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>   
                </div>
            </div>
        </div>
        <!-- Projects End -->