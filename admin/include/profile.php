<?php 
    $id = $_SESSION['id_user'];
    $sql = "SELECT `username`, `email`, `foto_user` from `user` where `id`='$id'";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
        $nama = $data[0];
        $email = $data[1];
        $foto = $data[2];
    }
?>
<section class="content">
    <div class="content-main">
        <div class="content-name">
            Profile
        </div>
        <div class="profile-page">
            <div class="profile-pict">
                <div class="img"><img src="public/img/profile/<?php echo $foto ?>" alt=""></div>
            </div>
            <div class="desc-profile">
                <div class="profile-desc-page">
                    <div class="profile-name"><?php echo $nama ?></div>
                    <div class="profile-email"><?php echo $email ?></div>
                </div>
                <a class="edit-profile" href="index.php?include=edituser&id=<?php echo $id ?>">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>
</section>