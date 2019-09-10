<?php
require 'function.php';
$data = query("SELECT * FROM guru");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>data guru</title>
</head>
<body>
 
 <a href="?hal=tambah_guru" class="btn btn-primary mb-4">Tambah guru</a>



  <h1>Daftar Guru</h1>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nip</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
  <?php $i = 1; ?>
  <?php foreach ($data as $dt) : ?>
    <tr>
      <td><?= $i;  ?></td>
      <td><?= $dt["nik"]; ?></td>
      <td><?= $dt["nama"];  ?></td>
      <td><?= $dt["alamat"];  ?></td>
      <td><a href="?hal=edit_guru&id=<?= $dt['id']; ?>" class="badge badge-pill badge-success">edit</a>
          <a href="?hal=hapus_guru&id=<?= $dt['id']; ?>" class="badge badge-pill badge-danger">hapus</a>
      </td>
    </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>