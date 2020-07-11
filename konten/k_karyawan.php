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
</div>