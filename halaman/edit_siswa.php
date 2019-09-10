<?php 
require 'function.php';

$id = $_GET['id'];

    $data = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {

if(ubah($_POST, 'siswa') > 0 ){
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = '?hal=lihat_siswa';
          </script>";
}else{
      echo "<script>
            alert('data gagal diubah!');
            document.location.href = '?hal=lihat_siswa';
          </script>";
}
} 




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit siswa</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="id" id="id" value="<?= $data["id"];?>">
	<div class="form-group">
        <label for="nip">Nisn</label>
        <input type="text" class="form-control form-control-user" id="nip" name="nisn" value="<?= $data["nisn"];?>">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $data["nama"];?>">
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $data["kelas"];?>">
	</div>
    <div class="form-group">
        <label for="email">Jurusan</label>
        <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" value="<?= $data["jurusan"];?>">
    </div>
     <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $data["email"];?>">
    </div>

    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mt-4">Ubah Data</button> 
	</form>
</body>
</html>