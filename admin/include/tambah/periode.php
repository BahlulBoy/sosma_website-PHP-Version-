<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Periode</h1>
        <a href="/admin/periode">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-periode" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
            <input type="number" min="1900" max="2050" class="form-control" id="tahun" placeholder="isikan Tahun" name="tahun">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Periode</label>
            <input type="text" class="form-control" id="nama_periode" placeholder="Nama Periode" name="nama_periode">
        </div>
        <div class="btn-sbmt">
            <button type="submit" value="Submit">submit</button>
        </div>
    </form>
</div>