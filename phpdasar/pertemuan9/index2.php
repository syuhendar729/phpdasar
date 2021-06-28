<?php

// Koneksi ke database mysql
$conn = mysqli_connect("localhost", "root", "", "anime"); // --> dari localhost, user root, pw nya kosong, dan nama databasenya anime

// Ambil data dari tabel daftar --> masih penutupnya (blum spesifik)
$result = mysqli_query($conn, "SELECT * FROM daftar"); // 

// var_dump($result);
// echo "<br><br>";
// print_r($result);
// echo "<br><br>";
// if ( !$result ) {
// 	# code...
// 	echo mysqli_error($conn);
// } // --> Utk munculin pesan errornya

// Ambil data dari table daftar --> sudah spesifik
	// mysqli_fetch_row() --> mengembalikan array numerik
	// mysqli_fetch_assoc() --> mengembalikan array associative
	// mysqli_fetch_array() --> mengembalikan keduanya dan ada double datanya
	// mysqli_fetch_object() --> contoh makenya mysqli_fetch_object($anm->judul)
// echo "<br><br>";
// $anm1 = mysqli_fetch_row($result);
// var_dump($anm1[1]);
// echo "<br><br>";
// echo $anm1[1];

// $anm4 = mysqli_fetch_object($result);
// var_dump($anm1->judul);
// echo "<br><br>";
// while ( $anm = mysqli_fetch_assoc($result) ) {
// 	# code...
// 	var_dump($anm);
// } // Pake loop agar datanya tidak 1 saja yg ditampilkan

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
	<?php while ( $row = mysqli_fetch_assoc($result)): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><img src="img/<?php echo $row["gambar"] ?>" width="70" ></td>
			<td><?php echo $row["judul"]; ?></td>
			<td><?php echo $row["genre"]; ?></td>
			<td><?php echo $row["rating"]; ?></td>
			<td><?php echo $row["sinopsis"]; ?></td>
			
			<td>
				<a href="">ubah</a> |
				<a href="">hapus</a>
			</td>
		</tr>
		<?php $no++ ?>
	<?php endwhile;?>
</table>

</body>
</html>
