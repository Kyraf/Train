<?php if (!isset($_GET["Nama"]) || !isset($_GET['NPM']) || !isset($_GET['Jurusan'])){
	header("Location: GET.php");
	exit;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>GET Receive</title>
</head>
<body>
	<h1>Detail Mahasiswa</h1>
	<ul>
		<li><?= $_GET["Nama"]; ?></li>
		<li><?= $_GET["NPM"]; ?></li>
		<li><?= $_GET["Jurusan"]; ?></li>
	</ul>

<a href="GET.php">kembali</a>
</body>
</html>