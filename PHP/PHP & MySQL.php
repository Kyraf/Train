<?php 
	// $conn = mysqli_connect('localhost', 'root', '', 'unpas');

	// $result = 	mysqli_query($conn, "SELECT * FROM coba");
	// if (!$result) {
	// 	echo mysqli_error($conn);
	// }
	// code diatas masukkan ke file functions.php

	require 'functions.php';
	$mahasiswa = query("SELECT * FROM coba");


	// fetch data / ambil isi record dari table didalam $result
	// mysqli_fetch_row() (mengembalikan nilai array numerik)
	// $mhs = mysqli_fetch_row($result);
	// var_dump($mhs);
	// echo "<br>";
	// echo "<br>";

	// mysqli_fetch_assoc (mengembalikan nilai array associative)
	// $mhsassoc = mysqli_fetch_assoc($result);
	// var_dump($mhsassoc);
	// echo "<br>";
	// echo "<br>";

	// mysqli_fetch_array (mengembalikan nilai array numerik dan associative)
	// $mhsarray = mysqli_fetch_array($result);
	// var_dump($mhsarray);
	// echo "<br>";
	// echo "<br>";

	// mysqli_fetch_object (mengembalikan nilai object)
	// $mhsobj = mysqli_fetch_object($result);
	// var_dump($mhsobj->Nama);
	// echo "<br>";
	// echo "<br>";

	// foreach ($mhsassoc as $i) {
	// 	var_dump($i);
	// }

	// echo "<br>";
	// echo "<br>";

	// while ($record = mysqli_fetch_assoc($result)){
	// 	var_dump($record);
	// }

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
        </tr>

        <!-- <?php while ($row = mysqli_fetch_assoc($result)) : ?>

        <tr>
            <td><?= $row["ID"] ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><?= $row["Nama"] ?></td>
            <td><?= $row["NPM"] ?></td>
            <td><?= $row["Jurusan"] ?></td>
        </tr>

        <?php endwhile; ?> -->

        <?php foreach ($mahasiswa as $row) : ?>

	        <tr>
	            <td><?= $row["ID"] ?></td>
	            <td>
	                <a href="">ubah</a> |
	                <a href="">hapus</a>
	            </td>
	            <td><?= $row["Nama"] ?></td>
	            <td><?= $row["NPM"] ?></td>
	            <td><?= $row["Jurusan"] ?></td>
	        </tr>

	    <?php endforeach; ?>



    </table>

</body>
</html>