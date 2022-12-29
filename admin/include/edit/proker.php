<?php 
$sql = "SELECT `nama_periode`, `tahun` FROM `periode`";
$query = mysqli_query($koneksi, $sql);
?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT *, `nama`, `nama_periode` FROM `proker` INNER JOIN `anggota` ON `proker`.`penanggungjawab` = `anggota`.`nim` INNER JOIN `periode` ON `proker`.`periode` = `periode`.`id_periode` WHERE `nama_proker`='$id'";
    $buery = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_row($buery)) {
        $nama_proker = $data[0];
        $waktu = explode(" ", $data[1]);
        $stanggal = $waktu[0];
        $sbulan = $waktu[1];
        $stahun = $waktu[2];
        $mtangga = $waktu[4];
        $mbulan = $waktu[5];
        $mtahun = $waktu[6];
        $lokasi_proker = $data[2];
        $deskripsi = $data[3];
        $penanggungjawab = $data[9];
        $foto = $data[6];
    }
?>
<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Proker</h1>
        <a href="index.php?include=proker">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-edit-proker" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Proker</label>
            <input type="text" class="form-control" id="nim" value="<?php echo $nama_proker ?>" placeholder="Judul Proker" name="nama_proker">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kegiatan Dimulai</label>
            <input type="number" class="form-control" value="<?php echo $stanggal ?>" id="tanggal_lahir" placeholder="Tanggal" name="mtanggal" min="1" max="31" required>
            <select class="form-select" aria-label="Default select example" id="Jabatan" name="mbulan" required>
                <option selected>Bulan</option>
                    <option value="Januari" >Januari</option>
                    <option value="Februari" >Februari</option>
                    <option value="Maret" >Maret</option>
                    <option value="April" >April</option>
                    <option value="Mei" >Mei</option>
                    <option value="Juni" >Juni</option>
                    <option value="Juli" >Juli</option>
                    <option value="Agustus" >Agustus</option>
                    <option value="Oktober" >Oktober</option>
                    <option value="November" >November</option>
                    <option value="Desember" >Desember</option>
            </select>
            <input type="number" class="form-control" value="<?php echo $stahun ?>" id="tanggal_lahir" placeholder="Tahun" name="mtahun" min="1900" max="2100" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kegiatan Berakhir</label>
            <input type="number" class="form-control" id="tanggal_lahir" placeholder="Tanggal" name="stanggal" min="1" max="31" value="<?php echo $mtangga ?>" required>
            <select class="form-select" aria-label="Default select example" id="Jabatan" name="sbulan" required>
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
            <input type="number" class="form-control" value="<?php echo $mtahun ?>" id="tanggal_lahir" placeholder="Tahun" name="stahun" min="1900" max="2100" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
            <input type="text" class="form-control" value="<?php echo $lokasi_proker ?>" id="tanggal_lahir" placeholder="Lokasi Proker" name="lokasi_proker">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea id="editor" class="form-control" name="deskripsi"><?php echo $deskripsi ?>
            </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bidang</label>
            <select class="form-select" aria-label="Default select example" id="Jabatan" name="bidang" required>
                <option selected>Bidang</option>
                    <option value="Pengabdian" >Pengabdian</option>
                    <option value="Pendidikan" >Pendidikan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penanggung Jawab</label>
            <input type="text" class="form-control" value="<?php echo $penanggungjawab ?>" id="penanggung_jawab" placeholder="Lokasi Proker" name="penanggung_jawab">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Foto Dokumentasi</label>
            <input type="file" class="form-control" id="jabatan" placeholder="foto dokumentasi" name="image">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Periode</label>
            <select class="form-select" aria-label="Default select example" id="periode" name="periode" required>
                <option selected>Pilih Periode</option>
                <?php while ($data_k = mysqli_fetch_row($query)) { ?>
                    <option value="<?php echo $data_k[0] ?>" ><?php echo $data_k[1] ?></option>
                <?php } ?>
            </select>
        </div>
            <input type="hidden" name="id" value="<?php echo $nama_proker ?>">
            <input type="hidden" name="foto" value="<?php echo $foto ?>">
        <div class="btn-sbmt">
            <button type="submit" value="Submit">submit</button>
        </div>
    </form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>