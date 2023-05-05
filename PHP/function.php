<!-- WPU : https://youtu.be/R5C70w2MOkE -->
<!-- sumber : php.net/manual/en/funcref.php -->

<?php 

// date()
// check hari
echo date("l");

echo "<br>";
echo "<br>";

// time()
// check 2 hari yang akan datang
echo date("l", time()+60*60*24*2);

echo "<br>";
echo "<br>";

// mktime(0, 0, 0, 0, 0, 0,)
// jam, menit, detik, bulan, tanggal, tahun

// melihat selisih detik hari ini dengan 24 sept 1999
echo mktime(0,0,0,9, 24, 1999);

echo "<br>";
echo "<br>";


// melihat hari di tanggal 24 sept 1999
echo date("l", mktime(0,0,0,9, 24, 1999));

echo "<br>";
echo "<br>";

// strtotime
// sama seperti mktime tetapi menggunakan string
echo date("l", strtotime("24 sept 1999"));


// string
// strlen(panjang string)
// strcmp(compare 2 string)
// explode(memecah string menjadi array)


// utility
// var_dump(check isi variable)
// isset(check variable udah dibuat atau belum)
// empty(check variable kosong atau tidak)
// die(berhentiin program)
// sleep(berentiin sementara/timeout)


echo "<br>";
echo "---------------------------------------------------------";
echo "<br>";

// function
// set default parameter pada function
function salam($i = "Datang", $user = "admin"){
	return "Selamat $i, $user!";
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Function</title>
 </head>
 <body>
 <h1><?= salam();  ?></h1>
 </body>
 </html>