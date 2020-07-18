<?php $_SESSION['form']=true;
require_once 'assets/data.php';
require_once 'template/header.php';
?>
<div class="container">
    <h1 class="table-warning">Form Input menggunakan method $_POST</h1>
    <form action="form.php" method="post">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat Lengkap</label>
        <textarea class="form-control" name="alamat" id="alamat" cols="15" rows="5"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php
require_once 'template/footer.php'; 
