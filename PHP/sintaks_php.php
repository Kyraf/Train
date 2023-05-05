<?php 

// standard output:
	// - echo
	// - print
	// - print_r (biasanya untuk debug menampilkan isi aray)
	// - var_dump (biasanya untuk debug menampilkan informasi dari variable)


echo "ini menggunakan echo<br>";
print "ini menggunakan print<br>";
print_r("ini menggunakan print_r<br>");
var_dump("ini menggunakan var_dump");
echo"<br>";

echo "angka ";
echo 123;
echo "<br>";
echo "boolean ";
echo true;
echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";

// variable
$paragraph = "ini paragraph dari variable php";

// operator
// aritmatika
// + - * /
$z = 2;
$x = 3;
$b = 1;
$y = 4;
$a = 8;
$hasil = ($z + $x - $b) * $y / $a;
var_dump($hasil);
echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";

// penggabungan string / concatenation / concat
// .
$string_1 = "yang baca";
$string_2 = "pinter";
echo $string_1 . " " . $string_2;
echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";

// assignment
// =, +=, -=, *=, /=, %=, .=
$angka = 5;
echo $angka;
echo "<br>";
$angka += 5; //5 + 5 = 10
echo $angka;
echo "<br>";
$angka %= 3; //10 / 3 = 9 sisa 1
echo $angka;
echo "<br>";
echo "<br>";

$string = "dasar";
echo $string;
echo "<br>";
$string .= "sungai";
echo $string;

echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";

// perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1");

echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";

// identitas (membandingkan nilai dan tipe datanya)
// ===, !==
var_dump(1 === "1");

echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";

// operator logika
// $$(AND), ||(OR), !(NOT)


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belajar PHP</title>
 </head>
 <body>
 	<!-- php didalam html -->
 <h1>disamping ini dan paragraf dibawah menggunakan PHP >> <?php echo"ini pake php"; ?></h1>
 <p><?php echo "paragraf dari php >> $paragraph"; ?></p>

 <!-- html didalam php -->
 <?php echo "<h1>html didalam php</h1>" ?>
 </body>
 </html>