<div class="container">
    <h1 class="table-warning">Menampilkan Data dari Database SQL</h1>
    <h2>
        <center>Data Siswa</center>
    </h2>
    <table class="table">
        <thead class="bg-danger">
            <th>NIS</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>STATUS</th>
            <th>HOBI</th>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) { ?>
                <tr>
                    <td><?= $value["id"] ?></td>
                    <td><?= $value["nama"] ?></td>
                    <td><?= $value["alamat"] ?></td>
                    <td><?= $value["no_hp"] ?></td>
                    <td><?= $value["status"] ?></td>
                    <td><?= $value["hobi"] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>