<!-- source : https://youtu.be/mNgOuUUp1I0 -->
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
 	<title>Array Associative</title>
 </head>
 <body>
 <h2>Tampilkan array dengan index string</h2>
 <div><?= $mahasiswa[1]["Nama"]; ?></div>
 <div><?= $mahasiswa[1]["Tugas"][2] ?></div>

 <h2>Tampilkan semua nilai array</h2>
 <?php Foreach($mahasiswa as $mhs) : ?>
 	<ul>
 		<li>Nama : <?= $mhs["Nama"] ?></li>
 		<li>NPM : <?= $mhs["NPM"] ?></li>
 		<li>Jurusan : <?= $mhs["Jurusan"] ?></li>
 		<li>Nilai Tugas : 
 			<?php 
 				Foreach($mhs["Tugas"] as $nilai) {
 					echo "$nilai, ";
 				}
 			?>
 									
 		</li>
 	</ul>
<?php endforeach ?>
 </body>
 </html>