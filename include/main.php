<?php
    $in = "SELECT `nama_proker`, `deskripsi` FROM `proker` LIMIT 3";
    $rw = mysqli_query($koneksi, $in);

    $g = "SELECT * FROM anggota WHERE jabatan='Mentri' OR jabatan='Dirjen'";
    $angg = mysqli_query($koneksi, $g);
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
                        <a href="index.php?include=beranda" class="nav-item nav-link active">Beranda</a>
                        <a href="index.php?include=berita" class="nav-item nav-link">Berita</a>
                        <a href="index.php?include=proker" class="nav-item nav-link">Program Kerja</a>
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
            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Kementrian Sosial Masyarakat</h1>
                            <p class="text-white pb-3 animated slideInDown" align="justify">Kementrian Sosial Masyarakat (SOSMA) bergerak di bidang pelayanan
                                kepada masyarakat dengan berbagai program mulai dari pendidikan, bantuan sosial, pengabdian, sampai responsif
                                terhadap bencana. Sosma juga menjadi wadah bagi Mahasiswa Vokasi dalam pencerdasan isu-isu soial, kerelawanan
                                serta turun langsung ke masyarakat untuk menyalurkan semangat pengabdian serta kedermawanan. Kementrian ini adalah
                                perwujudan mahasiswa dalam Tri Dharma Perguruan Tinggi yaitu Pengabdian Masyarakat.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <br><img class="img-fluid animated zoomIn"  src="admin/public/img/sosmagrup.png" alt="" width="1000px"></br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <img class="img-fluid rouded-square mb-4" src="admin/public/img/communication.png" alt="">
                            <h5 class="mb-3">"Bermasyarakat"</h5>
                            <p class="m-0">Sebagai mahkluk sosial yang hidup dalam masyarakat.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <img class="img-fluid rouded-square mb-4" src="admin/public/img/respect (1).png" alt="">
                            <h5 class="mb-3">"Bermartabat"</h5>
                            <p class="m-0">Berperilaku hidup berdasarkan nurani yang menjunjung tinggi kemanusiaan dan memperlakukan dengan etis dan bijaksana.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <img class="img-fluid rouded-square mb-4" src="admin/public/img/help.png" alt="">
                            <h5 class="mb-3">"Bermaslahat"</h5>
                            <p class="m-0">Bergerak demi mendatangkan kebaikan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">Program Kerja<span></span></p>
                        <h1 class="mb-5">8 Program Kerja Kementrian Sosial Masyarakat</h1>
                        <p class="mb-4" align="justify">Program kerja Kementrian Sosial Masyarakat terbagi menjadi 2 bidang, yaitu: bidang pengabdian yang terdiri dari program kerja dan bidang pendidikan yang terdiri dari 3 bidang.</p>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Share Your Blood</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">VOSVOR (Vocational Sharing for Other)</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">MENTOS (Mental Health of Sosma)</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Gentar Vokasi</p>
                                <p class="mb-2">25%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Abdi Desa</p>
                                <p class="mb-2">97%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Social Academy</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Jendela Sosma</p>
                                <p class="mb-2">50%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Vokasi Mengajar</p>
                                <p class="mb-2">95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="service.html" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="admin/public/img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">12</h1>
                        <p class="text-white mb-0">Bulan Masa Periode</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">12</h1>
                        <p class="text-white mb-0">Program Kerja</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">12</h1>
                        <p class="text-white mb-0">Anggota</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">7</h1>
                        <p class="text-white mb-0">Program Kerja Terlaksana</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>DOKUMENTASI<span></span></p>
                    <h1 class="text-center mb-5">Program Kerja</h1>
                </div>
                <div class="row g-4">
                    <?php while ($data = mysqli_fetch_row($rw)) { ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-search fa-2x"></i>
                                </div>
                                <h5 class="mb-3"><?php echo $data[0] ?></h5>
                                <?php print $data[1] ?>
                                <a class="btn btn-square" href="index.php?include=proker"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Message<span></span></p>
                <h1 class="text-center mb-5">What Say Our Sosmoys!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Selama menjadi staff ahli di sosma, banyak pengalaman yang saya dapatkan. Disini saya mendapatkan keluarga yang susah senang menjalani kegiatan-kegiatan yang ada.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="admin/public/img/testimonial/yusuf.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Yusuf Ardiansyah</h5>
                                <span>Staff Ahli</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Organisasi ini adalah organisasi yg ramah kepada saya. dan saya belajar banyak saat saya bergabung di organisasi Sosma Vokasi</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="admin/public/img/testimonial/verona.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Verona Tristan Jeannyva Hendarsin</h5>
                                <span>Staff Ahli</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Bergabung di organisai membuat saya mempunyai skill komunikasi yg bermanfaat bagi saya. Dan juga berkat saya bergabung, saya memiliki banyak koneksi</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="admin/public/img/testimonial/syahla.png" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Syahla Levina</h5>
                                <span>Staff Ahli</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Leaders<span></span></p>
                    <h1 class="text-center mb-5">Our BPH</h1>
                </div>
                <div class="row g-4">
                    <?php while ($d = mysqli_fetch_row($angg)) { ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item bg-light rounded">
                                    <div class="text-center border-bottom p-4">
                                        <img class="img-fluid rounded-circle mb-4" src="admin/public/img/foto anggota/<?php echo $d[7] ?>" alt="">
                                        <h5><?php echo $d[2] ?></h5>
                                        <span><?php echo $d[6] ?></span>
                                    </div>
                                    <div class="d-flex justify-content-center p-4">
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>  
            </div>
        </div>
        <!-- Team End -->
        