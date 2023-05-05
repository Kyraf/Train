<?php 

require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM coba WHERE ID = $id;")[0];

if ( isset($_POST["input"])) {
	if (ubah($_POST) > 0) {
			echo "
			<script> 
				alert('Update Berhasil');
				document.location.href = 'update.php';
			</script>
				";
		} else {
			echo "
			<script> 
				alert('Update Gagal');
				document.location.href = 'update.php';
			</script>
				";
		}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
</head>
<body>

	<h1>Update Data</h1>

	<form action="" method="POST">
		<input type="hidden" name="id" value="<?= $mhs["ID"] ?>">
		<ul>
			<li>
				<label for="Nama">Nama : </label>
				<input type="text" name="nama" id="Nama" required value="<?= $mhs["Nama"] ?>">
			</li>
			<br>
			<li>
				<label for="NPM">NPM : </label>
				<input type="text" name="npm" id="NPM" required value="<?= $mhs["NPM"] ?>">
			</li>
			<br>
			<li>
				<label for="Jurusan"> Jurusan : </label>
				<input type="text" name="jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"] ?>">
			</li>
			<br>
			<button type="submit" name="input"> Update Data</button>
		</ul>
	</form>
</body>
</html>