<?php
require_once '../konfigurasi.php';

if (empty($_POST)) {
    echo "anda salah alamat";
    echo "<a href='../siswa.php'>Back</a>";
} else {
    $data = [
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"],
        "hobi" => $_POST["hobi"],
        "status" => $_POST["status"],
        "no_hp" => $_POST["no_hp"]
    ];

    try {
        $sql = "INSERT INTO siswa (nama, alamat, hobi, status, no_hp) VALUES (:nama, :alamat, :hobi, :status, :no_hp)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $_SESSION['add']=true;
        header('location:../siswa.php');
    } catch (\Throwable $e) {
        echo "error".$e;
    }
}