<?php

session_start();
if ( $_SESSION["user"] !== "administrator" ) {
	# code...
	header("Location: login.php");
	exit;
}
require 'functions.php'; 
$anime = query("SELECT * FROM daftar"); 

if ( isset($_POST["cari"]) ) {
	# code...
	$anime = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-reboot.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style>
		body {
			background-color: black;
		}

	</style>
</head>
<body>

<div class="container">
		<h1>Selamat Datang <?= $_SESSION["user"]; ?></h1>
		<a href="logout.php">Logout</a>

			<h2>Daftar Anime</h2>
			<h4><a href="tambah.php">Tambah Daftar Anime</a></h4>

	<div class="row justify-content-center">	
		<form action="" method="post">
			<input type="text" name="keyword" size="50" placeholder="Masukkan Keyword..." autofocus="" autocomplete="off" id="keyword" class="form-control form-control-user">
			<button type="submit" name="cari" id="tombolcari" class="hidden">Cari!</button>
		</form>
		<br>

		<div id="container">
		<table border="1" cellpadding="10" cellspacing="0" >
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Judul</th>
					<th>Genre</th>
					<th>Rating</th>
					<th>Sinopsis</th>
					<th>Aksi</th>
				</tr>
		<?php $no = 1 ?>
			<?php foreach ($anime as $anm) : ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><img src="img/<?php echo $anm["gambar"] ?>" width="70" ></td>
					<td><?php echo $anm["judul"]; ?></td>
					<td><?php echo $anm["genre"]; ?></td>
					<td><?php echo $anm["rating"]; ?></td>
					<td><?php echo $anm["sinopsis"]; ?></td>
					
					<td>
						<a href="ubah.php?id=<?= $anm["id"]; ?>">ubah</a> |
						<a href="hapus.php?id=<?= $anm["id"]; ?>" onclick="return confirm('Ingin menghapus data ini ?');">hapus</a>
						
					</td>
				</tr>
				<?php $no++ ?>
			<?php endforeach;?>
		</table>
		</div>
	</div>	
</div>

<script src="js/script.js"></script>
</body>
</html>
