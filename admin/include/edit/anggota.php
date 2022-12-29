<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT *, `tahun` FROM `anggota` INNER JOIN `periode` ON `anggota`.`periode` = `periode`.`id_periode` WHERE `nim`=$id";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
        $nim = $data[0];
        $nama = $data[1];
        $prodi = $data[3];
        $waktu = explode(" ", $data[2]);
        $tanggal = $waktu[0];
        $bulan = $waktu[1];
        $tahun = $waktu[2];
        $periode = $data[9];
        $jabatan = $data[5];
        $nama_jabatan = $data[6];
        $foto = $data[7];
    }
}
$sql = "SELECT *, `tahun` FROM `anggota` INNER JOIN `periode` ON `anggota`.`periode` = `periode`.`id_periode`";
$query = mysqli_query($koneksi, $sql);
?>
<?php 
$sql = "SELECT `nama_periode`, `tahun` FROM `periode`";
$blurry = mysqli_query($koneksi, $sql);
?>
<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Anggota</h1>
        <a href="index.php?include=anggota">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-edit-anggota" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" placeholder="Nama Anggota" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
            <input type="number" class="form-control" id="tanggal_lahir" placeholder="Tanggal" name="tanggal" min="1" max="31" value="<?php echo $tanggal ?>" required>
            <select class="form-select" aria-label="Default select example" id="Jabatan" name="bulan" required>
                <option selected>Bulan</option>
                    <option value="Januari" >Januari</option>
                    <option value="Februari" >Februari</option>
                    <option value="Maret" >Maret</option>
                    <option value="April" >April</option>
                    <option value="Mei" >Mei</option>
                    <option value="Juni" >Juni</option>
                    <option value="Juli" >Juli</option>
                    <option value="Agustus" >Agustus</option>
                    <option value="September" >September</option>
                    <option value="Oktober" >Oktober</option>
                    <option value="November" >November</option>
                    <option value="Desember" >Desember</option>
            </select>
            <input type="number" class="form-control" id="tanggal_lahir" placeholder="Tahun" name="tahun" min="1900" max="2100" value="<?php echo $tahun ?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prodi</label>
            <input type="text" class="form-control" value="<?php echo $prodi ?>" id="prodi" placeholder="Prodi" name="prodi" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Periode</label>
            <select class="form-select" aria-label="Default select example" id="periode" name="periode" required>
                <option selected>Pilih Periode</option>
                <?php while ($data_k = mysqli_fetch_row($blurry)) { ?>
                    <option value="<?php echo $data_k[0] ?>" ><?php echo $data_k[1] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
            <select class="form-select" aria-label="Default select example" id="Jabatan" name="jabatan" required>
                <option selected>Pilih Jabatan</option>
                    <option value="Mentri" >Mentri</option>
                    <option value="Dirjen" >Dirjen</option>
                    <option value="Staff Ahli" >Staff Ahli</option>
                    <option value="Staff Muda" >Staff Muda</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Jabatan</label>
            <input type="Text" class="form-control" value="<?php echo $nama_jabatan?>" id="jabatan" placeholder="Nama Jabatan" name="nama_jabatan" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Foto Angggota</label>
            <input type="file" class="form-control" id="jabatan" placeholder="foto Anggota" name="image">
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="foto" value="<?php echo $foto ?>">
        <div class="btn-sbmt">
            <button type="submit" nama="hasil" value="Submit">submit</button>
        </div>
    </form>
</div>