<?php
// Pertemuan10 --> INSERT & DELETE database oleh user
// Skrg
// Pertemuan11 --> UPDATE database oleh user

// --> METODE EFEKTIF
require 'functions.php'; // --> menyambungkan dgn hal functions.php
$anime = query("SELECT * FROM daftar"); // --> memanggil fungsi bernama `query`yg kita bikin di halaman functions.php

// note: ini gunain halaman php yg pertemuan9

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<!-- nyambungin ke hal lain utk menambah daftar di database -->
	<h1><a href="tambah.php" target="_blank">Tambah Daftar Anime</a></h1>

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
				<a href="ubah.php?id=<?= $anm["id"]; ?>" target="_blank">ubah</a> |
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
