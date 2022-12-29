<?php 
$sql = "SELECT * FROM `contact`";
$query = mysqli_query($koneksi, $sql);
?>
<section class="content">
    <div class="content-main">
        <div class="content-name">
            Pesan
        </div>
        <div class="content-page">
            <div class="option-page">
            </div>
            <div class="database-contact">
                <div class="database-contact-title">
                    <div class="contact-nama">Nama</div>
                    <div class="contact-email">Email</div>
                    <div class="contact-judul">Judul Pesan</div>
                    <div class="contact-isi">Isi Pesan</div>
                    <div class="edit-contact"></div>
                </div>
                <div class="database-contact-value-store">
                <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                    <div class="database-contact-value">
                        <div class="contact-nama"><?php echo $data_k[1] ?></div>
                        <div class="contact-email"><?php echo $data_k[2] ?></div>
                        <div class="contact-judul"><?php echo $data_k[3] ?></div>
                        <div class="contact-isi"><?php echo $data_k[4] ?></div>
                        <div class="edit-contact">
                            <a href="index.php?include=hapuspesan&id=<?php $data_k[0] ?>"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

    