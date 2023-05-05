<!-- source : https://youtu.be/6vG4oO39ivY -->

<!-- variable global -->

<?php 
$x = 10;

function cetakx(){
	global $x; //jika tidak ada ini maka akan error
	echo($x);
}

cetakx();

 ?>


 <!-- variable superglobals -->
<!-- 
 $_GET
 $_POST
 $_REQUEST
 $_SESSION
 $_COOKIE
 $_SERVER
 $_ENV -->

<?php 
echo "<br>";
var_dump($_GET);
 ?>


 <?php 
$mahasiswa = 
[
	[
		"NPM" => "52415098",
		"Nama" => "Kaban",
		"Jurusan" => "Teknik Informatika",
		"Tugas" => [75, 90, 80, 66]
	],
	[
		"NPM" => "52415099",
		"Nama" => "Koban",
		"Jurusan" => "Teknik Industri",
		"Tugas" => [75, 90, 50, 66]
	]
]

  ?>


<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
		<?php Foreach ($mahasiswa as $mhs) : ?>
		<li>
			<a href="GET2.php?Nama=<?= $mhs["Nama"]; ?>&NPM=<?=$mhs["NPM"]; ?>&Jurusan=<?=$mhs["Jurusan"]; ?>"><?=$mhs["Nama"] ?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>