<?php
require_once '../konfigurasi.php';

if (empty($_POST)) {
?>
    <div class="container">
        <div class="alert alert-warning" role="alert">
            Data tidak ditemukan
        </div>
        <button type="button" class="btn btn-dark"><a href='siswa.php'>Back</a></button>
    </div>
<?php
} else {
    $data = [
        "id" => $_POST["id"],
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"],
        "hobi" => $_POST["hobi"],
        "status" => $_POST["status"],
        "no_hp" => $_POST["no_hp"]
    ];

    try {
        $sql = "UPDATE siswa SET nama=:nama, alamat=:alamat, hobi=:hobi, status=:status, no_hp=:no_hp WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        header('location:../siswa.php');
    } catch (PDOException $e) {
        echo "error" . $e;
    }
}
