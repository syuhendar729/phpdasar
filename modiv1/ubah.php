<?php
session_start();
if ( $_SESSION["user"] !== "administrator" ) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

$id = $_GET["id"];

$daftar = query("SELECT * FROM daftar WHERE id = $id")[0];

if ( isset($_POST["submit"]) ) {
	if ( ubah($_POST) > 0 ) {
		echo "
				<script>
					alert('Data berhasil diubah');
					document.location.href = 'index.php';
				</script>
			";
	}	else {
		echo "
				<script>
					alert('GAGAL mengubah data !!!');
					document.location.href = 'index.php';
				</script>
			";
		var_dump(mysqli_error($conn)); 
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Daftar Anime</title>
</head>
<body>
	<h1>Ubah Daftar Anime</h1>
	<form action="" method="post" enctype="multipart/form-data"> 
		<ul>
			<input type="hidden" name="id" value="<?= $id; ?>">
			<input type="hidden" name="gambarLama" value="<?= $daftar["gambar"]; ?>">
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul" id="judul" required="" value="<?= $daftar["judul"]; ?>" size="30">
			</li>
			<li>
				<label for="genre">Genre : </label>
				<input type="text" name="genre" id="genre" required="" value="<?= $daftar["genre"]; ?>" size="40">
			</li>
			<li>
				<label for="rating">Rating : </label>
				<input type="text" name="rating" id="rating" required="" value="<?= $daftar["rating"]; ?>" size="5">
			</li>
			<li>
				<label for="sinopsis">Sinopsis : </label>
				<input type="text" name="sinopsis" id="sinopsis" required="" value="<?= $daftar["sinopsis"]; ?>" size="100">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<img src="img/<?= $daftar["gambar"] ?>" width="70" > <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah</button>
			</li>
		</ul>
	</form>
</body>
</html>

