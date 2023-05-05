<?php 

require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
		echo "
		<script> 
			alert('Hapus Berhasil');
			document.location.href = 'Insert & Delete.php';
		</script>
			";
	} else {
		echo "
		<script> 
			alert('Hapus Gagal');
			document.location.href = 'Insert & Delete.php';
		</script>
			";
}
 ?>	