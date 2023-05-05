<?php 
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM coba");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
        </tr>

        <?php foreach ($mahasiswa as $row) : ?>

	        <tr>
	            <td><?= $row["ID"] ?></td>
	            <td>
	                <a href="ubah.php?id= <?= $row["ID"]; ?>">ubah</a> |
	                <a href="hapus.php?id=<?=$row["ID"]; ?>" onClick = "return confirm('yakin?');">hapus</a>
	            </td>
	            <td><?= $row["Nama"] ?></td>
	            <td><?= $row["NPM"] ?></td>
	            <td><?= $row["Jurusan"] ?></td>
	        </tr>

	    <?php endforeach; ?>



    </table>

</body>
</html>