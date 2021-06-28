<?php
require 'functions.php';

$id = $_GET["id"];

$daftar = query("SELECT * FROM daftar WHERE id = $id")[0];
// var_dump($daftar["judul"]);

// Cek ketika submit ditekan
if ( isset($_POST["submit"]) ) {
	if ( ubah($_POST) > 0 ) {
			# code... tampilkan jika berhasil atau tidaknya
		echo "
				<script>
					alert('Data berhasil diubah');
					document.location.href = 'index.php';
				</script>
			"; # menggunakan alert javascript, kalau ok akan dialihkan ke hal `index.php`
	}	else {
		echo "
				<script>
					alert('GAGAL mengubah data !!!');
					document.location.href = 'index.php';
				</script>
			";
		var_dump(mysqli_error($conn)); // Biar tau error mysql nya dimana
	}


};
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Daftar Anime</title>
</head>
<body>
	<h1>Ubah Daftar Anime</h1>
	<form action="" method="post" enctype="multipart/form-data"> 
		<!-- menggunakan aksi default, yaitu data dikirim kehalaman ini lagi -->
		<!-- menggunakan metode post yg meng-hidden url berisi inputan -->
		<!-- dan inputannya akan masuk ke variabel $_POST -->
		<ul>
			<input type="hidden" name="id" value="<?= $id; ?>">
			<input type="hidden" name="gambarLama" value="<?= $daftar["gambar"]; ?>">
			<li>
				<label for="judul">Judul : </label>
				<!-- for = id yg ada di input, biar bisa nyambung label dan inputnya-->
				<input type="text" name="judul" id="judul" required="" value="<?= $daftar["judul"]; ?>">
				<!-- tipe yg dimasukkan adalah `text`  -->
				<!-- nama index array assoc yg ada di var $_POST[""] -->
				<!-- required utk mengharuskan user memasukkan input ini -->
			</li>
			<li>
				<label for="genre">Genre : </label>
				<input type="text" name="genre" id="genre" required="" value="<?= $daftar["genre"]; ?>">
			</li>
			<li>
				<label for="rating">Rating : </label>
				<input type="text" name="rating" id="rating" required="" value="<?= $daftar["rating"]; ?>">
			</li>
			<li>
				<label for="sinopsis">Sinopsis : </label>
				<input type="text" name="sinopsis" id="sinopsis" required="" value="<?= $daftar["sinopsis"]; ?>">
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
