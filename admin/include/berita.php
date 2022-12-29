<?php 
$sql = "SELECT *, `nama` FROM `berita` INNER JOIN `anggota` ON `berita`.`penulis` = `anggota`.`nim`";
$query = mysqli_query($koneksi, $sql);
?>
<section class="content">
    <div class="content-main">
        <div class="content-name">
            Berita
        </div>
        <div class="content-page">
            <div class="option-page">
                <a href="index.php?include=addberita" class="add-btn">Add Berita</a>
            </div>
            <div class="database-berita">
                <div class="database-berita-title">
                    <div class="berita-id">Id</div>
                    <div class="berita-title">Judul Berita</div>
                    <div class="berita-value-title">Isi Berita</div>
                    <div class="berita-tanggal">Tanggal Berita</div>
                    <div class="berita-penulis">Penulis</div>
                    <div class="edit-berita"></div>
                </div>
                <div class="database-berita-value-store">
                <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                    <div class="database-berita-value">
                        <div class="berita-id"><?php echo $data_k[0] ?></div>
                        <div class="berita-title"><?php echo $data_k[1] ?></div>
                        <div class="berita-value"><?php echo $data_k[2] ?></div>
                        <div class="berita-tanggal"><?php echo $data_k[3] ?></div>
                        <div class="berita-penulis"><?php echo $data_k[6] ?></div>
                        <div class="edit-berita">
                            <a href="index.php?include=hapusberita&id=<?php echo $data_k[0] ?>"><i class="bi bi-trash"></i></a>
                            <a href="index.php?include=editberita&id=<?php echo $data_k[0] ?>"><i class="bi bi-pencil-square"></i></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>