<?php
require 'functions.php';
// $conn = mysqli_connect("localhost", "root", "", "anime"); 

// Cek tombol submit sudah ditekan atau blum
if ( isset($_POST["submit"]) ) {
	# code...
	// var_dump($_POST);
	// $judul = $_POST["judul"];
	// $genre = $_POST["genre"];
	// $rating = $_POST["rating"];
	// $sinopsis = $_POST["sinopsis"];
	// $gambar = $_POST["gambar"];
	// Masukin datanya lewat query
	// $query = "INSERT INTO daftar VALUES
	// 		(NULL, '$judul', '$genre', '$rating', '$sinopsis', '$gambar' )
	// 		";
	// mysqli_query($conn, $query);

	// if ( mysqli_affected_rows($conn) > 0 ) {
	// 	echo "Data berhasil ditambahkan";
	// }	else {
	// 	echo "Gagal menambahkan data !!!";
	// 	echo mysqli_error($conn);
	// };  --> sudah ada di functions.php

	if ( tambah($_POST) > 0 ) {
			# code... tampilkan jika berhasil atau tidaknya
		echo "
				<script>
					alert('Data berhasil ditambahkan');
					document.location.href = 'index.php';
				</script>
			"; # menggunakan alert javascript, kalau ok akan dialihkan ke hal `index.php`
	}	else {
		echo "
				<script>
					alert('GAGAL menambahkan data !!!');
					document.location.href = 'index.php';
				</script>
			";
	}


};


?>	

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Anime</title>
</head>
<body>

	<form action="" method="post"> 
		<!-- menggunakan aksi default, yaitu data dikirim kehalaman ini lagi -->
		<!-- menggunakan metode post yg meng-hidden url berisi inputan -->
		<!-- dan inputannya akan masuk ke variabel $_POST -->
		<ul>
			<li>
				<label for="judul">Judul : </label>
				<!-- for = id yg ada di input, biar bisa nyambung label dan inputnya-->
				<input type="text" name="judul" id="judul" required="">
				<!-- tipe yg dimasukkan adalah `text`  -->
				<!-- nama index array assoc yg ada di var $_POST[""] -->
				<!-- required utk mengharuskan user memasukkan input ini -->
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
				<input type="text" name="gambar" id="gambar" required="">
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form>

	<!-- <div style="
	position: absolute;
	top: 0;
	bottom:0;
	left: 0;
	right: 0;
	background-color: black;
	font-size: 100px;
	color: red;
	text-align: center;">This website has been HACKED by Syuhendar729</div> --> 
	<!-- contoh web di-dipes, karna disusupi tag html seperti diatas di form input nya -->

</body>
</html>
