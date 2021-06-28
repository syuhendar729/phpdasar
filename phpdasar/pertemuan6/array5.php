<?php
// Array Associative --> indexnya bisa sesuai yg kita inginkan
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
	<title>Array Associative</title>
	<style>
		body {
			background-color: grey;
		}
		.conten {
			width: 950px;
    		margin: 80px auto;
    		background-color:white;
    		color: #000000;
    		position: relative;
		}
		.conten h2 {
			text-align: center;

		}

	</style>
</head>
<body>

<div class="conten">
	<br><br>
		<h2>Daftar Anime</h2>

<?php foreach ( $anime as $anm ) : ?>
	<ul>
		<img src="img/<?php echo $anm["gambar"] ?>">
		<li>Judul : <?php echo $anm["judul"]; ?></li>
		<li>Genre : <?php echo $anm["genre"]; ?></li>
		<li>Rating : <?php echo $anm["rating"]; ?></li>
		<li>Sinopsis : <?php echo $anm["sinopsis"]; ?></li>
	</ul>
<?php endforeach; ?>
</div>

</body>
</html>
