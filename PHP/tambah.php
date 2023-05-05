<?php 

require 'functions.php';

if ( isset($_POST["input"])) {
	if (tambah($_POST) > 0) {
			echo "
			<script> 
				alert('Input Berhasil');
				document.location.href = 'Insert & Delete.php';
			</script>
				";
		} else {
			echo "
			<script> 
				alert('Input Gagal');
				document.location.href = 'Insert & Delete.php';
			</script>
				";
		}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
<body>

	<h1>Tambah Data</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="Nama">Nama : </label>
				<input type="text" name="nama" id="Nama" required>
			</li>
			<br>
			<li>
				<label for="NPM">NPM : </label>
				<input type="text" name="npm" id="NPM" required>
			</li>
			<br>
			<li>
				<label for="Jurusan"> Jurusan : </label>
				<input type="text" name="jurusan" id="Jurusan" required>
			</li>
			<br>
			<button type="submit" name="input"> Tambah Data</button>
		</ul>
	</form>
</body>
</html>