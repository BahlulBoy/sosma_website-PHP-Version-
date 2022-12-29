<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT *, `nama` FROM `berita` INNER JOIN `anggota` ON `berita`.`penulis` = `anggota`.`nim` WHERE `id_berita`=$id";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
            $judul_berita = $data[1];
            $isi_berita = $data[2];
            $waktu = explode(" ", $data[3]);
            $tanggal = $waktu[0];
            $bulan = $waktu[1];
            $tahun = $waktu[2];
            $penulis = $data[4];
        }
    }
?>
<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Berita</h1>
        <a href="index.php?include=berita">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-edit-berita" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" placeholder="Judul Berita" name="judul_berita" value="<?php echo $judul_berita ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Berita</label>
            <textarea id="editor" class="form-group" name="isi_berita"><?php print $isi_berita ?>
            </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Berita Dibuat</label>
            <input type="number" class="form-control" id="tanggal_lahir" placeholder="Tanggal" name="tanggal" min="1" value="<?php echo $tanggal ?>" max="31" required>
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
            <label for="exampleFormControlInput1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" value="<?php $penulis ?>" placeholder="Penulis" name="penulis">
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
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