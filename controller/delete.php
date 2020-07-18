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
} else { ?>

<?php
    $data = [
        "id" => $_POST['id']
    ];

    try {
        $sql = "DELETE FROM siswa WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $_SERVER['alert'] = '<div class="container">
        <div class="alert alert-warning" role="alert">
            Data berhasil dihapus
        </div>
    </div>';
        header('location:../siswa.php');
    } catch (PDOException $e) {
        echo "error" . $e;
    }
}
