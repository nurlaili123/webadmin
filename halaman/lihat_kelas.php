<?php 
require 'function.php';

$data = query("SELECT * FROM kelas");



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>data kelas</title>
</head>
<body>
 
  <a href="?hal=tambah_kelas" class="btn btn-primary mb-4">Tambah Kelas</a>


  <h1>Daftar Kelas</h1>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Ruangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($data as $dt) : ?>
    <tr>
      <th scope="row"><?= $i;  ?></th>
      <td><?= $dt["kelas"];  ?></td>
      <td><?= $dt["ruang"];  ?></td>
      <td><a href="?hal=edit_kelas&id=<?php echo $dt['id']; ?>" class="badge badge-pill badge-success">edit</a>
          <a href="?hal=hapus_kelas&id=<?php echo $dt['id']; ?>" class="badge badge-pill badge-danger">hapus</a>
      </td>
    </tr>
    <?php $i++ ?>
  <?php endforeach; ?>
</table>
</body>
</html>