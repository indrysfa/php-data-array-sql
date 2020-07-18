<?php

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([
    'id' => $id
]);

$siswa = $stmt->fetch();