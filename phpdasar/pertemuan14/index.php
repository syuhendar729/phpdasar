<?php
// Pertemuan10 --> INSERT & DELETE database oleh user
// Pertemuan11 --> UPDATE database oleh user
// Pertemuan12 --> READ (search) database oleh user
// Skrg
// Pertemuan13 --> UPLOAD FILE
// note: ini gunain halaman php dari pertemuan9

// --> METODE EFEKTIF
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
	<h1>Daftar Anime</h1>
	<!-- nyambungin ke hal lain utk menambah daftar di database -->
	<h2><a href="tambah.php">Tambah Daftar Anime</a></h2>

<form action="" method="post">
	<input type="text" name="keyword" size="50" placeholder="Masukkan Keyword..." autofocus="" autocomplete="off" >
	<button type="submit" name="cari">Cari!</button>
</form>
<br>
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

</body>
</html>
