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
	// $gambar = htmlspecialchars($data["gambar"]);

	// Upload gambar
	$gambar = upload(); 
	if ( !$gambar ) { 
		# code...
		return false;
	}



	$query = "INSERT INTO daftar VALUES
			(NULL, '$judul', '$genre', '$rating', '$sinopsis', '$gambar' )
			"; // command insert data ke database
	mysqli_query($conn, $query); // tambah data ke database. Rumusnya ('koneksi ke database', 'command query-nya utk tambah data')

	return mysqli_affected_rows($conn); // mengembalikan nilai $conn, jika 1 benar dan jika -1 berarti salah(ada yg error)
};

function upload(){ # ini adalah funsi buatan utk mengupload file
		# code...
	// Masukkan variabel global files ke variabel buatan kita
	$namaFile = $_FILES["gambar"]["name"]; // nama index default nya "name" --> nama file
	$ukuranFile = $_FILES["gambar"]["size"]; // nama index default nya "size" --> ukuran file
	$error = $_FILES["gambar"]["error"]; // nama index default nya "error" --> klo hasillnya 0 = tdk error , klo hasilnya 4 = errornya ada 4 (dari index "name" "size" "tmp_name" dan "error")
	$tmpName = $_FILES["gambar"]["tmp_name"]; // nama index default nya "tmp_name" --> biar tau direktori file yg diupload usernya dari mana

	// Cek apakah ada gambar yg diupload
	if ( $error === 4 ) {
		# code...
		echo "<script> alert('Pilih gambar dulu')</script>";
		return false;
	}
	// Cek apakah yg diupload adalah gambar
	$ekstensiFileValid = ["jpg", "jpeg", "png"];
	$ekstensiFile = explode('.', $namaFile); // explode akan memisahkan antara nama file dan ekstensinya dan menjadikannya array numerik
	$ekstensiFile = strtolower(end($ekstensiFile)); // menjadikan string semuannya huruf kecil

	if ( !in_array($ekstensiFile, $ekstensiFileValid) ) {
		# code...
				echo "<script> alert('Uploadlah file yg benar !!')</script>";
				return false;
	}

	// Cek ukuran gambar yg diupload
	if ( $ukuranFile > 2000000 ) {
		# code...
				echo "<script> alert('Batas max size gambar adalah 2Mb')</script>";
				return false;
	}

	// Jika lolos pengecekan

	// kasih nama file baru
	$namaFileBaru = uniqid(); // Nama file di jadiin random
	$namaFileBaru .= '.'; // tambahin sama . biar nyambung dgn ekstensinya
	$namaFileBaru .= $ekstensiFile;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru); // function alami utk move file dari komputer user ke server
	return $namaFileBaru;


}







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
	$gambarLama = htmlspecialchars($data["gambarLama"]); // Pake gambar lama klo user gk pilih gambar baru

	// Cek apakah user pilih gambar baru atau tidak
	if ( $_FILES["gambar"]["error"] === 4 ) { # jika error maka gagal ubah gambar
		# code...
		$gambar = $gambarLama;
	} else { 
		$gambar = upload();
	}


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



function cari($keyword){
	# code...
	$query = "SELECT * FROM daftar 
				WHERE
				judul LIKE '%$keyword%' OR
				genre LIKE '%$keyword%' OR
				rating LIKE '%$keyword%' OR
				sinopsis LIKE '%$keyword%' 
				";

	return query($query);			
}


function registrasi($data){
	# code...
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]); 
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// Cek username sudah terdaftar atau tidak
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	// var_dump($result);
	
	if ( mysqli_fetch_array($result) ) {
		# code...
		echo "<script>alert('Username ini sudah terdaftar !!!')</script>";
		return false;
	}
	// cek konfirmasi pw harus benar
	if ( $password !== $password2 ) {
	 	# code...
	 	echo "<script>alert('Konfirmasi password salah !!') </script>";
	 	return false;
	 } 

	// Encrypt password
	$password = password_hash($password, PASSWORD_DEFAULT);
	// Jgn gunakan MD5 karna gampang dibongkar
		// $password = md5($password);
	$password = password_hash($password, PASSWORD_DEFAULT);

	// Tambahkan user ke database
	mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$password') ");

	return mysqli_affected_rows($conn);
}









?>
