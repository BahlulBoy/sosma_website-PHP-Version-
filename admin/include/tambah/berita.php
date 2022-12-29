<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Berita</h1>
        <a href="index.php?include=berita">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-berita" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" placeholder="Judul Berita" name="judul_berita">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Berita</label>
            <textarea id="editor" class="form-group" name="isi_berita">
            </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Berita Dibuat</label>
            <input type="number" class="form-control" id="tanggal_lahir" placeholder="Tanggal" name="tanggal" min="1" max="31" required>
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
            <input type="number" class="form-control" id="tanggal_lahir" placeholder="Tahun" name="tahun" min="1900" max="2100" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" placeholder="Penulis" name="penulis">
        </div>
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