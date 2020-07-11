<?php 

/*==================================================================================*/
// Data array yang ditampilkan
/*==================================================================================*/

$karyawan = [
    [
        "nik" => "9038509",
        "nama" => "Ari",
        "bagian" => "Programmer",
        "alamat" => "Cikokol",
        "gaji" => "8000000",
        "img" => "mvclaravel.png"
    ],
    [
        "nik" => "9038510",
        "nama" => "Ani",
        "bagian" => "Admin",
        "alamat" => "Ciledug",
        "gaji" => "6000000",
        "img" => "mvclaravel.png"
    ],
    [
        "nik" => "9038511",
        "nama" => "Aris",
        "bagian" => "Digital Marketing",
        "alamat" => "Greenlake",
        "gaji" => "7000000",
        "img" => "mvclaravel.png"
    ]
];

/*==================================================================================*/
echo "<h1>Daftar Karyawan dengan PHP</h1><hr><hr>";
/*==================================================================================*/

$nik = "9038509";
$nama = "Ari";
$bagian = "Programmer";
$alamat = "Cikokol";
$gaji = 8000000;
$img = "gambar1.jpeg";

// echo "<table>
// <th>NIK</th>
// <th>Nama</th>
// <th>Bagian</th>
// <th>Alamat</th>
// <th>Gaji</th>
// <th>Foto</th>
// </table><br>";

// echo "<tr>
// <td>$nik</td>
// <td>$nama</td>
// <td>$bagian</td>
// <td>$alamat</td>
// <td>$gaji</td>
// <td><img src='img/$img' width='140' height='90' /></td>
// </tr><br>";

print "NIK: $nik<br>Nama: $nama<br>Bagian: $bagian<br>Alamat: $alamat". "<br>";
print "Gaji Kotor: Rp." . number_format($gaji, 2) . "<br>";
echo "<img src='img/$img' width='140' height='90' />";

echo "<hr>";

$nik = "9038510";
$nama = "Ani";
$bagian = "Admin";
$alamat = "Ciledug";
$gaji = "6000000";
$img = "gambar2.jpeg";

print "NIK: $nik<br>Nama: $nama<br>Bagian: $bagian<br>Alamat: $alamat". "<br>";
print "Gaji Kotor: Rp." . number_format($gaji, 2) . "<br>";
echo "<img src='img/$img' width='140' height='90' />";

echo "<hr>";

$nik = "9038511";
$nama = "Aris";
$bagian = "Digital Marketing";
$alamat = "Greenlake";
$gaji = "7000000";
$img = "gambar3.jpg";

print "NIK: $nik<br>Nama: $nama<br>Bagian: $bagian<br>Alamat: $alamat". "<br>";
print "Gaji Kotor: Rp." . number_format($gaji, 2) . "<br>";
echo "<img src='img/$img' width='140' height='90' />";

echo "<hr>";

?>