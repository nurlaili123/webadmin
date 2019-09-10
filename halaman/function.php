<?php 

//koneksi ke database 
	$connect = mysqli_connect("localhost", "root", "", "db_sekolah");

	function query($query) {
		global $connect;
		$result = mysqli_query($connect, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		
		return $rows;
	}


	function tambah($data, $type) {
		global $connect;

		if($type == 'guru') {

			$nik = $data["nip"];
			$nama = $data["nama"];
			$alamat = $data["alamat"];

			$query = "INSERT INTO guru VALUES( '', '$nik', '$nama', '$alamat')";
			mysqli_query($connect, $query);

			return mysqli_affected_rows($connect);

		}
		else if($type == 'kelas') {

			$kelas = $data["kelas"];
			$ruang = $data["ruang"];

			$query = "INSERT INTO kelas VALUES('', '$kelas', '$ruang')";
			mysqli_query($connect, $query);

			return mysqli_affected_rows($connect);

		}
		else if($type == 'siswa') {
			$nis = $data["nis"];
			$nama = $data["nama"];
			$kelas = $data["kelas"];
			$jurusan = $data["jurusan"];
			$email = $data["email"];

			$query = "INSERT INTO siswa VALUES('', '$nisn', '$nama', '$kelas', '$jurusan', '$email')";
			mysqli_query($connect, $query);

			return mysqli_affected_rows($connect);
		}
	}


	function hapus($id, $type) {
		if ($type == 'kelas') {

			global $connect;

			mysqli_query($connect, "DELETE FROM kelas WHERE id = $id");

			return mysqli_affected_rows($connect);

		}
		else if ($type == 'guru') {

			global $connect;

			mysqli_query($connect, "DELETE FROM guru WHERE id = $id");

			return mysqli_affected_rows($connect);
		}
		else if ($type == 'siswa') {

			global $connect;

			mysqli_query($connect, "DELETE FROM siswa WHERE id = $id");

			return mysqli_affected_rows($connect);
		}

	}


	function ubah($data, $type) {
		if ($type == 'kelas') {
	
		global $connect;

		$id = $data["id"];
		$kelas = $data["kelas"];
		$ruang = $data["ruang"];

		$query = "UPDATE kelas SET kelas = '$kelas', ruang = '$ruang' WHERE id='$id' "; 
		mysqli_query($connect, $query);

		return mysqli_affected_rows($connect); 

		}
		else if($type == 'guru') {

			global $connect;

			$id = $data["id"];
			$nip = $data["nip"];
			$nama = $data["nama"];
			$alamat = $data["alamat"];

			$query = "UPDATE guru SET
					  nik = '$nip',
					  nama = '$nama',
					  alamat = '$alamat'
					  WHERE id = '$id' ";
			mysqli_query($connect, $query);

			return mysqli_affected_rows($connect);
		}
		else if($type == 'siswa') {

			global $connect;

			$id = $data["id"];
			$nisn = $data["nisn"];
			$nama = $data["nama"];
			$kelas = $data["kelas"];
			$jurusan = $data["jurusan"];
			$email = $data["email"];

			$query = "UPDATE siswa SET
					  nisn = '$nisn',
					  nama = '$nama',
					  kelas = '$kelas',
					  jurusan = '$jurusan',
					  email = '$email'
					  WHERE id = '$id'";

			mysqli_query($connect, $query);

			return mysqli_affected_rows($connect);
		}

	}


		function register($data) {

			global $connect;

			$username = strtolower(stripcslashes($data["username"]));
			$email = strtolower(stripcslashes($data["email"]));
			$password = mysqli_real_escape_string($connect, $data["password"]);
			$password2 = mysqli_real_escape_string($connect, $data["password2"]);

			if ($password !== $password2) {
				echo "<script>
						alert('user tidak sesuai!');
					  </script>";

					  return false;
			}

			// enkripsi password
			$password = password_hash($password, PASSWORD_DEFAULT);

			// menambahkan user baru
			mysqli_query($connect,"INSERT INTO user VALUES('', '$username', '$email', '$password')");

			return mysqli_affected_rows($connect);
		}

 ?>