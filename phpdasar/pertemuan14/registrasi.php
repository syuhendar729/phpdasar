<?php

require 'functions.php';

if ( isset($_POST["register"]) ) {
	# code...
	if ( registrasi($_POST) > 0 ) {
		# code...
		echo "<script>alert('Pengguna berhasil ditambahkan')</script> ";
	} else {
		echo "<script>alert('Pengguna GAGAL ditambahkan!')</script> ";
		// var_dump($conn);
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
	<h1>Registrasi</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi Password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<br>
			<li>
				<button type="submit" name="register">Registrasi!</button>
			</li>
		</ul>
	</form>

</body>
</html>
