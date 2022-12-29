<div class="add-page">
    <div class="titleAndbutton">
        <h1 class="title">Add Anggota</h1>
        <a href="index.php?include=anggota">Back</a>
    </div>
    <form class="form-add" action="index.php?include=konfir-user" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama user" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Foto Profile</label>
            <input type="file" class="form-control" id="profile" name="image">
        </div>
        <div class="btn-sbmt">
            <button type="submit" value="Submit">submit</button>
        </div>
    </form>
</div>