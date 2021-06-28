<?php 
	
	// Variabel superglobal --> bawaan dr php dan bisa digunakan di semua file.php
		// $_GET
		// $_POST
		// $_REQUEST
		// $_SESSIONS
		// $_COOKIE
		// $_SERVER
		// $_ENV
	// Yang akan di bahas get, post, sessions, dan cookie
	// Merupakan tipe array associative
// contoh menampilkan :
// var_dump($_GET);
// echo "<br><br>";
// var_dump($_SERVER["SERVER_NAME"]); // Nama index SERVER_NAME
// echo "<br><br>";
// var_dump($_POST);
// echo "<br><br>";
// echo "<br><br>";

	// $_GET --> var utk memasukkan data
	// $_GET["judul"] = "Angel Beats";
	// $_GET["genre"] = "audh";
	// $_GET["rating"] = "8,3";
	// var_dump($_GET). "<br><br>" ;
	// Memasukkan data dgn GET bisa lewat browser, jika ada function yg menampilkan var get-nya maka key dan value yg kita masukkan akan terlihat
	// contoh get.php?nama=suada --> jika dgn var_dump akan ditampilkan array(1) { ["nama"]=> string(5) "suada" }
	// get.php?satu=hai&dua=bro --> array(2) { ["satu"]=> string(3) "hai" ["dua"]=> string(3) "bro" }
	// & --> digunakan utk menambah data di GET dgn pasangan key dan value di link tsbt

	// Pengaplikasian pake yg kemarin
	$anime = 
[
	[
		"judul" => "Charlotte" ,
		"genre" => "Supranatural, School, Drama" ,
		"rating" => "8,1" ,
		"sinopsis" => "Seorang MC yang memiliki kekuatan super dan ia gunakan untuk kejahatan hingga ia bertemu seseorang yang mengubah hidupnya",
		"gambar" => "charlotte.jpg"
	],
	[	
		"judul" => "Angel Beats" ,
		"genre" => "Issekai, Supranatural, School, Drama" ,
		"rating" => "8,3" ,
		"sinopsis" => "Seorang MC yang sudah mati masuk ke dunia setelah kematian karna ada sesuatu yang belum diselesaikan dalam hidupnya",
		"gambar" => "angelbeats.jpg" 
	],
	[
		"judul" => "Steins Gate" ,
		"genre" => "Sci-fi, Thriller" ,
		"rating" => "9,1" ,
		"sinopsis" => "Seorang MC yang punya kemampuan Leading Steiner yaitu bisa mengingat apa yang terjadi ketika garis waktu dunia berganti",
		"gambar" => "steinsgate.jpg"
	]
];





 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Get PHP</title>
</head>
<body>


<!-- <?php foreach( $anime as $anm ) : ?>
	<ul>
		<li><img src="img/<?= $anm["gambar"] ?>"></li>
		<li><?= $anm["judul"]; ?></li>
		<li><?= $anm["genre"]; ?></li>
		<li><?= $anm["rating"]; ?></li>
		<li><?= $anm["sinopsis"]; ?></li>
	</ul>
<?php endforeach; ?> -->


		<!-- <li><img src="img/<?php echo $anm["gambar"] ?>"></li> -->
		<!-- <li><?php echo $anm["genre"]; ?></li> -->
		<!-- <li><?php echo $anm["rating"]; ?></li> -->
		<!-- <li><?php echo $anm["sinopsis"]; ?></li> -->

	<h2>Daftar Anime</h2>	
	<ul>
<?php foreach( $anime as $anm ) : ?>
		<li><a href="get2.php?judul=<?= $anm["judul"]; ?>&genre=<?= $anm["genre"]; ?>&rating=<?= $anm["rating"]; ?>&sinopsis=<?= $anm["sinopsis"]; ?>&gambar=<?= $anm["gambar"]; ?>"><?php echo $anm["judul"]; ?></a></li>
<?php endforeach; ?>
	</ul>


</body>
</html>












