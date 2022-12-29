<?php 
    $dir = "SELECT `nama`, `nama_jabatan`, `foto` FROM `anggota` WHERE `jabatan`='Dirjen'";
    $dirname = mysqli_query($koneksi, $dir);
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
                        <a href="index.php?include=galeri" class="nav-item nav-link">Galeri</a>
                        <a href="index.php?include=periode" class="nav-item nav-link">Periode</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Our Sosmoy Team</a>
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
                    <h1 class="text-white animated slideInDown">Dirjen Sosial Masyarakat Fakultas Vokasi 2022</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/berita">berita</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="/galeri">Galeri</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Leaders<span></span></p>
            <h1 class="text-center mb-5">Dirjen Sosial Masyarakat BEM Fakultas UB Periode 2022</h1>
        </div>
        <?php while($kata = mysqli_fetch_row($dirname)) { ?>
            <div class="row g-4 team ">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light rounded">
                        <div class="text-center border-bottom p-4">
                            <img class="img-fluid rounded-circle mb-4" src="admin/public/img/foto anggota/<?php echo $kata[2] ?>" alt="">
                            <h5><?php echo $kata[0] ?></h5>
                            <span><?php echo $kata[1] ?></span>
                        </div>
                        <div class="d-flex justify-content-center p-4">
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>