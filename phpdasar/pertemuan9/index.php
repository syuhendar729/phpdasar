<?php
// --> METODE EFEKTIF
require 'functions.php'; // --> menyambungkan dgn hal functions.php
$anime = query("SELECT * FROM daftar")

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

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
				<a href="">ubah</a> |
				<a href="">hapus</a>
			</td>
		</tr>
		<?php $no++ ?>
	<?php endforeach;?>
</table>

</body>
</html>
