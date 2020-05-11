<?php

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table class="table table-striped">
  <thead class="table-info">
    <tr style="text-align: center">
      <th scope="col">Id</th>
      <th scope="col">GAMBAR</th>
      <th scope="col">NAMA</th>
      <th scope="col">AKSI</th>
    </tr>
    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p>DATA NOT FOUND!!</p>
        </td>
      </tr>

    <?php endif; ?>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $m) : ?>
  </thead>
  <tbody style="text-align: center">
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['Gambar']; ?>" width="200"></td>
      <td><?= $m['Nama']; ?></td>
      <td>
        <a href="detail.php?Id=<?= $m['Id']; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>