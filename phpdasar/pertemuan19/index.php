<?php
// Pertemuan16 --> Session
// note: ini gunain halaman php dari pertemuan9
session_start();
if ( !isset($_SESSION["login"]) ) {
	# code...
	header("Location: login.php");
	exit;
}
require 'functions.php'; // --> menyambungkan dgn hal functions.php
$anime = query("SELECT * FROM daftar"); // --> memanggil fungsi bernama `query`yg kita bikin di halaman functions.php

if ( isset($_POST["cari"]) ) {
	# code...
	$anime = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Selamat Datang <?= $_SESSION["user"]; ?></h1>

<a href="logout.php">Logout</a>

	<h2>Daftar Anime</h2>
	<!-- nyambungin ke hal lain utk menambah daftar di database -->
	<h3><a href="tambah.php">Tambah Daftar Anime</a></h3>

<form action="" method="post">
	<input type="text" name="keyword" size="50" placeholder="Masukkan Keyword..." autofocus="" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombolcari">Cari!</button>
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
				<!-- href="hapus.php?id=...  bermaksud me-request get dimana id= ...  -->
				<!-- lali id akan dimasukkan ke index di variabel $_GET[""] -->
				<!-- onclick utk menampilkan pop-up konfirmasi bahwa data akan dihapus -->
			</td>
		</tr>
		<?php $no++ ?>
	<?php endforeach;?>
</table>
</div>

<script src="js/script.js"></script>
</body>
</html>
