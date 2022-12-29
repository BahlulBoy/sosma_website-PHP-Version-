<?php
$sql = "SELECT *, `tahun` FROM `anggota` INNER JOIN `periode` ON `anggota`.`periode` = `periode`.`id_periode`";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
?>


<section class="content">
    <div class="content-main">
        <div class="content-name">
            Anggota
        </div>
        <div class="content-page">
            <div class="option-page">
                <a href="index.php?include=addanggota" class="add-btn">Add Anggota</a>
            </div>
            <div class="database-anggota">
                <div class="database-anggota-title">
                    <div class="anggota-nim">NIM</div>
                    <div class="anggota-nama">Nama</div>
                    <div class="anggota-tanggal-lahir">Tanggal Lahir</div>
                    <div class="anggota-prodi">Prodi</div>
                    <div class="anggota-periode">Periode</div>
                    <div class="anggota-jabatan">Jabatan</div>
                    <div class="anggota-nama-jabatan">Nama Jabatan</div>
                    <div class="anggota-foto">foto</div>
                    <div class="edit-anggota"></div>
                </div>
                    <div class="database-anggota-value-store">
                    <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                        <div class="database-anggota-value">
                            <div class="anggota-nim"><?php echo $data_k[0] ?></div>
                            <div class="anggota-nama"><?php echo $data_k[1] ?></div>
                            <div class="anggota-tanggal-lahir"><?php echo $data_k[2] ?></div>
                            <div class="anggota-prodi"><?php echo $data_k[3] ?></div>
                            <div class="anggota-periode"><?php echo $data_k[4] ?></div>
                            <div class="anggota-jabatan"><?php echo $data_k[5] ?></div>
                            <div class="anggota-nama-jabatan"><?php echo $data_k[6] ?></div>
                            <div class="anggota-foto"><?php echo $data_k[7] ?></div>
                            <div class="edit-anggota">
                                <a href="index.php?include=hapusanggota&id=<?php echo $data_k[0] ?>"><i class="bi bi-trash"></i></a>
                                <a href="index.php?include=editanggota&id=<?php echo $data_k[0] ?>"><i class="bi bi-pencil-square"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>
</section>