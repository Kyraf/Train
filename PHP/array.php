<?php 

$angka = [4, 75, 77, 19, 66, 583, 12];

$nest = [
[1,2,3],
[4,5,6],
[7,8,9]];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Array</title>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			margin: 3px;
 		}
 		h1{
 			clear: both;
 			padding-top: 30px;
 		}
 	</style>
 </head>
 <body>
 	<h1>For</h1>
 	<?php for($i = 0; $i < count($angka); $i++){ ?> 
 		<div class="kotak"> <?= $angka[$i]; ?> </div>
 	<?php } ?>
 	
 	<h1>Foreach</h1>
 	<?php Foreach($angka as $i) { ?>
 		<div class="kotak"><?php echo $i; ?></div>
 	<?php } ?>

 	<h1>Foreach with endforeach</h1>
 	<?php Foreach($angka as $i) : ?>
 		<div class="kotak"><?php echo $i; ?></div>
 	<?php endforeach ?>


    <h1>Nested print angka 7</h1>
    <div class="kotak"><?= $nest[2][0] ?></div>

    <h1>Nested print foreach with nested foreach</h1>
    <?php Foreach($nest as $a) : ?>
        <?php Foreach($a as $b) : ?>
            <div class="kotak"> <?= $b ?> </div>
        <?php endforeach ?>
    <?php endforeach ?>
 </body>
 </html>