<?php

/*==================================================================================*/
// Konfigurasi ke database
/*==================================================================================*/
// koneksi ke database
// $koneksi = mysqli_connect("localhost","root","","batch_2_weekend");
// mengambil data dari table siswa
// $data = mysqli_query($koneksi,"SELECT * FROM siswa");
// $siswa['all'] = mysqli_fetch_all($data);

// $koneksi = mysqli_connect("localhost","root","","batch_2_weekend");
// $data = mysqli_query($koneksi,"SELECT * FROM siswa");
// $siswa['row'] = mysqli_fetch_row($data);

// $koneksi = mysqli_connect("localhost","root","","batch_2_weekend");
// $data = mysqli_query($koneksi,"SELECT * FROM siswa");
// $siswa['assoc'] = mysqli_fetch_assoc($data);

// cek isi data pada table siswa
// var_dump($siswa['all']);
// echo "<br><br>";
// var_dump($siswa['row']);
// echo "<br><br>";
// var_dump($siswa['assoc']);
// echo "<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=batch_2_weekend", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
