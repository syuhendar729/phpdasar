<?php
session_start();
if ( $_SESSION["user"] !== "administrator" ) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

if ( isset($_POST["submit"]) ) {
	var_dump($_POST);
	var_dump($_FILES);

	if ( tambah($_POST) > 0 ) {
		echo mysqli_error($conn);
		echo "
				<script>
					alert('Data berhasil ditambahkan');
					document.location.href = 'index.php';
				</script>
			"; 
	}	else {
		echo "
				<script>
					alert('GAGAL menambahkan data !!!');
					document.location.href = 'index.php';
				</script>
			";
		echo mysqli_error($conn);
	}


};


?>	

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Anime</title>
</head>
<body>
	<h1>Tambah Daftar Anime</h1>

	<form action="" method="post" enctype="multipart/form-data"> 
		<ul>
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul" id="judul" required="">
			</li>
			<li>
				<label for="genre">Genre : </label>
				<input type="text" name="genre" id="genre" required="">
			</li>
			<li>
				<label for="rating">Rating : </label>
				<input type="text" name="rating" id="rating" required="">
			</li>
			<li>
				<label for="sinopsis">Sinopsis : </label>
				<input type="text" name="sinopsis" id="sinopsis" required="">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar" required=""> 
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form>
</body>
</html>

