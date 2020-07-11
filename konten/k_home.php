  <div class="container">
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