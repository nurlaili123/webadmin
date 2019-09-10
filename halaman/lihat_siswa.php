<?php 
require 'function.php';
$data = query("SELECT * FROM siswa");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>data siswa</title>
</head>
<body>
  <h1>Data Siswa</h1>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nisn</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($data as $dt) : ?>
    <tr>
      <th scope="row"><?= $i;  ?></th>
      <td><?= $dt["nisn"];  ?></td>
      <td><?= $dt["nama"];  ?></td>
      <td><?= $dt["kelas"];  ?></td>
      <td><?= $dt["jurusan"];  ?></td>
      <td><?= $dt["email"];  ?></td>
      <td><a href="?hal=edit_siswa&id=<?= $dt["id"];?>" class="badge badge-pill badge-success">edit</a>
          <a href="?hal=hapus_siswa&id=<?= $dt["id"];?>" class="badge badge-pill badge-danger">hapus</a>
      </td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>