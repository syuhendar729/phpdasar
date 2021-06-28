<?php

// Cek apakah tidak ada data di $_GET
// utk mengembalikan org(jahat) yg menggunakan request GET di url 

if ( !isset($_GET["judul"]) || 
	!isset($_GET["genre"]) ||
	!isset($_GET["rating"]) ||
	!isset($_GET["sinopsis"])		
	) {
	// !isset --> jika tidak ada data di GET maka....
	// redirect --> memindahkan user dr halaman, ke halaman lain
	header("Location: get.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Get2 PHP</title>
</head>
<body>

	<ul>
		<li><img src="img/<?= $_GET["gambar"] ?>"></li>
		<li>Judul : <?= $_GET["judul"]; ?></li>
		<li>Genre : <?= $_GET["genre"]; ?></li>
		<li>Rating : <?= $_GET["rating"]; ?></li>
		<li>Sinopsis : <?= $_GET["sinopsis"]; ?></li>
	</ul>

</body>
</html>
