<?php $_SESSION['karyawan'] = true;
require_once 'assets/karyawan.php';
require_once 'assets/data.php';
require_once 'template/header.php';
?>
<div class="container">
    <h1 class="table-warning">Menampilkan data dalam array</h1>
    <h2>
        <center>DATA KARYAWAN</center>
    </h2>
    <table class="table">
        <thead class="thead-dark">
            <th>NIK</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Alamat</th>
            <th>Gaji</th>
            <th>Foto</th>
        </thead>

        <tbody>
            <?php foreach ($karyawan as $key => $value) { ?>
                <tr>
                    <td><?php echo $value["nik"] ?></td>
                    <td><?php echo $value["nama"] ?></td>
                    <td><?php echo $value["bagian"] ?></td>
                    <td><?php echo $value["alamat"] ?></td>
                    <td><?php echo "Rp. " . number_format($value["gaji"]) . "-" ?></td>
                    <td>
                        <img src="img/<?php echo $value['img'] ?>" alt="zonk" width="100" height="60">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <table class="table table-striped">
        <h1 class="bg-info">Menampilkan Object Dalam Array</h1>
        <h2>
            <center>Data Karyawan</center>
        </h2>
        <thead class="bg-warning">
            <th>NIK</th>
            <th>NAMA</th>
            <th>BAGIAN</th>
            <th>ALAMAT</th>
            <th>GAJI</th>
            <th>FOTO</th>
        </thead>
        <tbody>
            <?php foreach ($data['karyawan'] as $key => $value) { ?>
                <tr>
                    <td><?= $value->nik ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->bagian ?></td>
                    <td><?= $value->alamat ?></td>
                    <td>Rp. <?= number_format($value->gaji) . ",-" ?></td>
                    <td>
                        <img src="img/<?= $value->img ?>" alt="zonk" width='140' height='90'>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
require_once 'template/footer.php';
