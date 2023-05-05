<?php 
$conn = mysqli_connect('localhost', 'root', '', 'unpas');

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	if (!$result) {
		echo mysqli_error($conn);
	}
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data['nama']);
	$npm = htmlspecialchars($data['npm']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$query = "INSERT INTO coba VALUES ('', '$nama', '$npm', '$jurusan')";

	$exec = mysqli_query($conn, "$query");

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	$query = "DELETE FROM coba WHERE ID = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$npm = htmlspecialchars($data['npm']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$query = "UPDATE coba SET Nama = '$nama', NPM = '$npm', Jurusan = '$jurusan' WHERE ID = '$id'";

	$exec = mysqli_query($conn, "$query");

	return mysqli_affected_rows($conn);
}

 ?>
