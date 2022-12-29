<?php 
$sql = "SELECT * FROM `user`";
$query = mysqli_query($koneksi, $sql);
?>
<section class="content">
    <div class="content-main">
        <div class="content-name">
            Pengaturan User
        </div>
        <div class="content-page">
            <div class="option-page">
                <a href="index.php?include=adduser" class="add-btn">Add User</a>
            </div>
            <div class="database-user">
                <div class="database-user-title">
                    <div class="user-nama">Nama</div>
                    <div class="user-email">Email</div>
                    <div class="user-username">Username</div>
                    <div class="user-foto">Foto</div>
                    <div class="edit-user"></div>
                </div>
                <div class="database-user-value-store">
                <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                    <div class="database-user-value">
                        <div class="user-nama"><?php echo $data_k[1] ?></div>
                        <div class="user-email"><?php echo $data_k[2] ?></div>
                        <div class="user-username"><?php echo $data_k[3] ?></div>
                        <div class="user-foto"><?php echo $data_k[5] ?></div>
                        <div class="edit-user">
                            <a href="index.php?include=hapususer&id=<?php echo $data_k[0] ?>"><i class="bi bi-trash"></i></a>
                            <a href="index.php?include=edituser&id=<?php echo $data_k[0] ?>"><i class="bi bi-pencil-square"></i></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>