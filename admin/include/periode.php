<?php 
$sql = "SELECT * FROM `periode`";
$query = mysqli_query($koneksi, $sql);
?>
<section class="content">
    <div class="content-main">
        <div class="content-name">
            Periode
        </div>
        <div class="content-page">
            <div class="option-page">
                <a href="index.php?include=addperiode" class="add-btn">Add periode</a>
            </div>
            <div class="database-periode">
                <div class="database-periode-title">
                    <div class="periode-id">id</div>
                    <div class="periode-tahun">Tahun</div>
                    <div class="periode-prodi">Nama Periode</div>
                    <div class="edit-periode"></div>
                </div>
                <div class="database-periode-value-store">
                <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                    <div class="database-periode-value">
                        <div class="periode-id"><?php echo $data_k[0] ?></div>
                        <div class="periode-tahun"><?php echo $data_k[1] ?></div>
                        <div class="periode-prodi"><?php echo $data_k[2] ?></div>
                        <div class="edit-periode">
                            <a onclick="return confirm("are you sure?");" href="index.php?include=hapusperiode&id=<?php echo $data_k[0] ?>"><i class="bi bi-trash"></i></a>
                            <a href="index.php?include=editperiode&id=<?php echo $data_k[0] ?>"><i class="bi bi-pencil-square"></i></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>