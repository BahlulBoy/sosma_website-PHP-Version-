<?php 
session_start(); 
include("../../koneksi/koneksi.php");
if (isset($_SESSION['id_user'])) {
    header("Location: ../index.php?include=profile");
}
 
if (isset($_POST['submit'])) {
    if (empty($_POST['username'])) {
        header("Location:index.php?gagal=userKosong");
    } else if(empty($_POST['password'])){
        header("Location:index.php?gagal=passKosong");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT id FROM user WHERE username='$username' AND password=MD5('$password')";
    $result = mysqli_query($koneksi, $sql);
    if ($result -> num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id'];
        header("Location:../index.php?include=profile");
    } else {
        header("Location:index.php?gagal=akunTidakDitemukan");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/mystyle.css">
</head>
<style>
    body{
        background-color: rgb(206, 204, 204);
    }
</style>
<body>
<div>
    <div class="formBackground" >
        <?php if(!empty($_GET['gagal'])){?>
            <?php if($_GET['gagal']=="userKosong"){?>
                <script>alert('tolong isi kolom username')</script>
            <?php } else if($_GET['gagal']=="passKosong"){?>
                <script>alert('tolong isi kolom password')</script>
            <?php } else {?>
                <script>alert('akun tidak ditemukan')</script>
            <?php }?>
        <?php }?>
        <div>
            <img src="../public/img/login.png" class="topicon">
        </div>
        <div>
            <p class="memberlogin">LOGIN</p>
        </div>
        <div class="formnew">
            <form action="" method="POST">
            <div class="input-group" id="inputz">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
                <button type="submit" value="submit" name="submit" id="btnnew" class="btn btn-info">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>