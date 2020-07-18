<?php $_SESSION['siswa']=true;

require_once 'template/header.php';
require_once 'konfigurasi.php';

$sql = "SELECT * FROM siswa";
$data = $conn->query($sql);

require_once 'konten/k_siswa.php';
require_once 'template/footer.php';