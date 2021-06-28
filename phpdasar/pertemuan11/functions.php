<?php
// Koneksi ke database mysql
$conn = mysqli_connect("localhost", "root", "", "anime"); // --> rumus ("nama_host", "nama_user_root", "pw_nya_kosong", "dan nama databasenya anime")

function query($query){
	# code...
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		# code...
		$rows[] = $row;
	};
	return $rows;
};

function tambah($data){ # nama functionnya `tambah` dan parameternya variabel $data
	# code...
	global $conn;
	// kita taruh $data[""] nya di variabel, biar gk error karna kebanyakan "string"
	$judul = htmlspecialchars($data["judul"]);  // htmlspecialchars--> biar tidak ada yg bisa memasukkan tag html
	$genre = htmlspecialchars($data["genre"]);
	$rating = htmlspecialchars($data["rating"]);
	$sinopsis = htmlspecialchars($data["sinopsis"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO daftar VALUES
			(NULL, '$judul', '$genre', '$rating', '$sinopsis', '$gambar' )
			"; // command insert data ke database
	mysqli_query($conn, $query); // tambah data ke database. Rumusnya ('koneksi ke database', 'command query-nya utk tambah data')

	return mysqli_affected_rows($conn); // mengembalikan nilai $conn, jika 1 benar dan jika -1 berarti salah(ada yg error)
};

function hapus($id){ # parameternya akan di tangkap oleh var $id
	# code...
	global $conn;
	mysqli_query($conn, "DELETE FROM daftar WHERE id = $id"); // menghapus data dimana id = $id (tergantung kita klik yg mana)
	return mysqli_affected_rows($conn); 
};

function ubah($data){
	# code...
	global $conn;
	// kita taruh $data[""] nya di variabel, biar gk error karna kebanyakan "string"
	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);  // htmlspecialchars--> biar tidak ada yg bisa memasukkan tag html
	$genre = htmlspecialchars($data["genre"]);
	$rating = htmlspecialchars($data["rating"]);
	$sinopsis = htmlspecialchars($data["sinopsis"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE daftar SET 
			judul = '$judul', 
			genre = '$genre', 
			rating = '$rating', 
			sinopsis = '$sinopsis', 
			gambar = '$gambar' 
			WHERE id = $id ";
	mysqli_query($conn, $query); // tambah data ke database. Rumusnya ('koneksi ke database', 'command query-nya utk tambah data')

	return mysqli_affected_rows($conn); // mengembalikan nilai $conn, jika 1 benar dan jika -1 berarti salah(ada yg error)

};

?>
