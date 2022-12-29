<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `periode` WHERE `id_periode`=$id";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
            $id_periode = $data[0];
            $tahun = $data[1];
            $nama_periode = $data[2];
        }
    }
?>
<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Periode</h1>
        <a href="index.php?include=periode">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-edit-periode" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
            <input type="number" min="1900" max="2050" value="<?php echo $tahun ?>" class="form-control" id="tahun" placeholder="isikan Tahun" name="tahun">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Periode</label>
            <input type="text" class="form-control" value="<?php echo $nama_periode ?>" id="nama_periode" placeholder="Nama Periode" name="nama_periode">
        </div>
        <input type="hidden" name="id" value="<?php echo $id_periode ?>">
        <div class="btn-sbmt">
            <button type="submit" value="Submit">submit</button>
        </div>
    </form>
</div>