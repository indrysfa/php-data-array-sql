<div class="container">
    <div class="row">
        <h1 class="table-warning">Menampilkan data array dalam array</h1>
        <div class="col-sm-8">
            <table class="table table-striped">
                <h2>
                    <center>Data Mahasiswa</center>
                </h2>
                <thead class="bg-primary">
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                </thead>
                <tbody>
                    <?php foreach ($UB['mahasiswa'] as $num => $value) { ?>
                        <tr>
                            <td><?= $value['nim'] ?></td>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['alamat'] ?></td>
                            <td><?= $value['jk'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="col-sm-4">
            <h2>
                <center>Tabel Mata Kuliah</center>
            </h2>
            <table class="table table-striped">
                <thead class="bg-info">
                    <th>MATKUL</th>
                    <th>DOSEN</th>
                </thead>
                <tbody>
                    <?php foreach ($UB['matkul'] as $key => $value) { ?>
                        <tr>
                            <td><?= $value['matkul'] ?></td>
                            <td><?= $value['dosen'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>