<?php

$conn = mysqli_connect("localhost", "root", "", "anime");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	};
	return $rows;
};

function tambah($data){ 
	global $conn;
	$judul = htmlspecialchars($data["judul"]);  
	$genre = htmlspecialchars($data["genre"]);
	$rating = htmlspecialchars($data["rating"]);
	$sinopsis = htmlspecialchars($data["sinopsis"]);
	
	$gambar = upload(); 
	if ( !$gambar ) { 
		return false;
	}



	$query = "INSERT INTO daftar VALUES
			(NULL, '$judul', '$genre', '$rating', '$sinopsis', '$gambar' )
			"; 
	mysqli_query($conn, $query); 
	return mysqli_affected_rows($conn); 
};

function upload(){ 
	$namaFile = $_FILES["gambar"]["name"]; 
	$ukuranFile = $_FILES["gambar"]["size"]; 
	$error = $_FILES["gambar"]["error"]; 
	$tmpName = $_FILES["gambar"]["tmp_name"]; 

	if ( $error === 4 ) {
		# code...
		echo "<script> alert('Pilih gambar dulu')</script>";
		return false;
	}
	$ekstensiFileValid = ["jpg", "jpeg", "png"];
	$ekstensiFile = explode('.', $namaFile); 
	$ekstensiFile = strtolower(end($ekstensiFile));

	if ( !in_array($ekstensiFile, $ekstensiFileValid) ) {
				echo "<script> alert('Uploadlah file yg benar !!')</script>";
				return false;
	}

	if ( $ukuranFile > 2000000 ) {
				echo "<script> alert('Batas max size gambar adalah 2Mb')</script>";
				return false;
	}

	$namaFileBaru = uniqid(); 
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;


}

function hapus($id){ 
	global $conn;
	mysqli_query($conn, "DELETE FROM daftar WHERE id = $id"); 

	return mysqli_affected_rows($conn); 
};

function ubah($data){
	global $conn;

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);  
	$genre = htmlspecialchars($data["genre"]);
	$rating = htmlspecialchars($data["rating"]);
	$sinopsis = htmlspecialchars($data["sinopsis"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]); 

	if ( $_FILES["gambar"]["error"] === 4 ) {
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
	mysqli_query($conn, $query); 

	return mysqli_affected_rows($conn); 

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

	$username = htmlspecialchars( strtolower(stripcslashes($data["username"])) );
	$password = mysqli_real_escape_string($conn, $data["password"]); 
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	
	if ( mysqli_fetch_array($result) ) {
		echo "<script>alert('Username ini sudah terdaftar !!!')</script>";
		return false;
	}
	if ( $password !== $password2 ) {
	 	echo "<script>alert('Konfirmasi password salah !!') </script>";
	 	return false;
	 } 

	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$password') ");

	return mysqli_affected_rows($conn);
}
?>
