<?php 
if (isset($_POST['input'])) {
	$klik = "Data Berhasil Ditambahkan";
} elseif (isset($_POST['edit'])) {
	$klik = "Data Berhasil Diubah";
} elseif (isset($_POST['delete'])) {
	$klik = "Data Berhasil Dihapus";
} else {
	header("Location: POST.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>POST2</title>
</head>
<body>
	<h1>Selamat Datang, <?= $_POST["Nama"] ?></h1>
	<h2><?= $klik; ?></h2>

	<a href="POST.php">Balik</a>
</body>
</html>