<?php 
$sql = "SELECT *, `nama`, `nama_periode` FROM `proker` INNER JOIN `anggota` ON `proker`.`penanggungjawab` = `anggota`.`nim` INNER JOIN `periode` ON `proker`.`periode` = `periode`.`id_periode`";
$query = mysqli_query($koneksi, $sql);
?>
<section class="content">
    <div class="content-main">
        <div class="content-name">
            Proker
        </div>
        <div class="content-page">
            <div class="option-page">
                <a href="index.php?include=addproker" class="add-btn">Add proker</a>
            </div>
            <div class="database-proker">
                <div class="database-proker-title">
                    <div class="proker-nama">nama_proker</div>
                    <div class="proker-tanggal">tanggal</div>
                    <div class="proker-lokasi">lokasi</div>
                    <div class="proker-deskripsi">deskripsi</div>
                    <div class="proker-waktu">Bidang</div>
                    <div class="proker-penanggung-jawab">penanggung jawab</div>
                    <div class="proker-dokumentasi">dokumentasi</div>
                    <div class="proker-periode">periode</div>
                    <div class="edit-proker"></div>
                </div>
                <div class="database-proker-value-store">
                <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                    <div class="database-proker-value">
                        <div class="proker-nama"><?php echo $data_k[0] ?></div>
                        <div class="proker-tanggal"><?php echo $data_k[2] ?></div>
                        <div class="proker-lokasi"><?php echo $data_k[2] ?></div>
                        <div class="proker-deskripsi"><?php echo $data_k[3] ?></div>
                        <div class="proker-waktu"><?php echo $data_k[4] ?></div>
                        <div class="proker-penanggung-jawab"><?php echo $data_k[9] ?></div>
                        <div class="proker-dokumentasi"><?php echo $data_k[6] ?></div>
                        <div class="proker-periode"><?php echo $data_k[17] ?></div>
                        <div class="edit-proker">
                            <a href="index.php?include=hapusproker&id=<?php echo $data_k[0] ?>"><i class="bi bi-trash"></i></a> <a href="index.php?include=editproker&id=<?php echo $data_k[0] ?>"><i class="bi bi-pencil-square"></i></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>