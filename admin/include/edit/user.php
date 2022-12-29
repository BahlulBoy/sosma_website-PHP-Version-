<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `user` WHERE `id`=$id";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
            $nama = $data[1];
            $username = $data[2];
            $email = $data[3];
            $password = $data[4];
            $foto_user = $data[5];
        }
    }
?>
<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Edit User</h1>
        <a href="index.php?include=profile">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-edit-user" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" placeholder="Nama user" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" value="<?php echo $username ?>" placeholder="Username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" value="<?php echo $email ?>" placeholder="E-mail" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" value="<?php echo $password ?>" placeholder="password" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Foto Profile</label>
            <input type="file" class="form-control" id="profile" name="image">
        </div>
            <input type="hidden" name="id" value="id">
            <input type="hidden" name="img" value="<?php echo $foto_user ?>">
        <div class="btn-sbmt">
            <button type="submit" value="Submit">submit</button>
        </div>
    </form>
</div>