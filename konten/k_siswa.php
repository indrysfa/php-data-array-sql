<div class="container">
    <?= isset($_SERVER['alert']) ? $_SERVER['alert'] :"";?>
    <h1 class="table-warning">Menampilkan Data dari Database SQL</h1>
    <h2>
        <center>Data Siswa</center>
    </h2>
    <a href="formtambahsiswa.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a><br><br>
    <table class="table table-striped">
        <thead class="bg-danger">
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>STATUS</th>
            <th>HOBI</th>
            <th colspan="2" style="text-align: center;">ACTION</th>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) { ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value["nama"] ?></td>
                    <td><?= $value["alamat"] ?></td>
                    <td><?= $value["no_hp"] ?></td>
                    <td><?= $value["status"] ?></td>
                    <td><?= $value["hobi"] ?></td>
                    <td>
                        <a href="formedit.php?id=<?= $value['id'] ?>" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="controller/delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $value["id"] ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>