<?php $_SESSION['add']=true;

require_once 'template/header.php';
?>

<div class="container">
    <h1 class="table-warning">
        <center>Form Tambah Data Siswa</center>
    </h1>
    <form action="controller/add.php" method="POST">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Enter your name" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" placeholder="Your Address" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="hobi" placeholder="Your Hobby" name="hobi">
            </div>
        </div>
        <div class="form-group row">
            <label for="no_hp" class="col-sm-2 col-form-label">Phonenumber</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="no_hp" placeholder="Your number phone" name="no_hp">
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" placeholder="Your Status" name="status">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
require_once 'template/footer.php';
