<?php 
require 'function.php';

if(isset($_POST["submit"])) {

// cek aoakah data berhasil ditambahkan
	if(tambah($_POST, 'siswa') > 0 ){
		echo "<script>
				alert('data berhasil ditambahkan');
				document.location.href = '?hal=lihat_siswa'
		      </script>";
	}else{
		echo "<script>
				alert('data gagal ditambahkan');
				document.location.href = '?hal=lihat_siswa'
		      </script>";
	}
}



 ?>
<h1 class="h3 mb-4 text-gray-800">Tambah Siswa</h1>
<form action="" method="post">
<div class="form-group">
        <label for="nis">NISN</label>
        <input type="text" class="form-control form-control-user" id="nis" name="nis" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control form-control-user" id="nama" name="nama">
    </div>
     <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control form-control-user" id="kelas">
    </div>
     <div class="form-group">
        <label for="email">jurusan</label>
        <input type="text" class="form-control form-control-user" id="nama">
    </div>
     <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control form-control-user" id="email">
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Tambah siswa</button>
</form>