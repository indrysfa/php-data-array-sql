<?php

require_once 'konfigurasi.php';
require_once 'controller/edit.php';
require_once 'template/header.php';
if (!$siswa) {
?>
    <div class="container">
        <div class="alert alert-warning" role="alert">
            Data tidak ditemukan
        </div>
        <button type="button" class="btn btn-dark"><a href='siswa.php'>Back</a></button>
    </div>
<?php
} else { ?>
    <div class="container">
        <h1 class="table-warning">
            <center>Form Edit Data Siswa</center>
        </h1>
        <form action="controller/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Enter your name" name="nama" value="<?= $siswa['nama'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Your Address" name="alamat" value="<?= $siswa['alamat'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="hobi" placeholder="Your Hobby" name="hobi" value="<?= $siswa['hobi'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-2 col-form-label">Phonenumber</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" placeholder="Your number phone" name="no_hp" value="<?= $siswa['no_hp'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" placeholder="Your Status" name="status" value="<?= $siswa['status'] ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="siswa.php" class="btn btn-dark">Back</a>
        </form>
    </div>
<?php
}
require_once 'template/footer.php';
