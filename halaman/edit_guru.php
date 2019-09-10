<?php
require 'function.php';

$id = $_GET["id"];

$data = query("SELECT * FROM guru WHERE id = $id");

if(isset($_POST['submit'])) {

if (ubah($_POST, 'guru') > 0) {

	echo "<script>
			alert('data berhasil diubah!');
			document.location.href = '?hal=lihat_guru';
	      </script>";
}else{
	echo "<script>
			alert('data berhasil diubah!');
			document.location.href = '?hal=lihat_guru';
	      </script>";

}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit_guru</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="id" id="id" value="<?= $data[0]["id"];?>">
	<div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control form-control-user" id="nip" name="nip" value="<?= $data[0]["nik"];?>">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $data[0]["nama"];?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $data[0]["alamat"];?>">
	</div>
    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mt-4">Ubah Data</button>
	</form>
</body>
</html>