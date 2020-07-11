<?php $_SESSION['form']=true;
require_once 'assets/data.php';
require_once 'template/header.php';

if (isset($_POST["submit"])) { ?>

    <p>Nama Kamu adalah: <b><?= $_POST['nama'] ?></b></p>
    <p>Yang beralamat di: <b><?= $_POST['alamat'] ?></b></p>

<?php
} ?>

<?php
if(!isset($_POST["submit"])) {
    require_once 'konten/k_form.php';
}
require_once 'template/footer.php'; 
