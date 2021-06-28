<?php 
require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM daftar 
				WHERE
				judul LIKE '%$keyword%' OR
				genre LIKE '%$keyword%' OR
				rating LIKE '%$keyword%' OR
				sinopsis LIKE '%$keyword%' 
				";
$anime = query($query);

?>

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