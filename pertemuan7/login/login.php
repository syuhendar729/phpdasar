<?php
// Cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
	# code...
	// cek username & password 
	if ( $_POST["nama"] == "admin" && $_POST["pass"] == "pswd" ) {
		# code...
		// jika benar redirect ke halaman lain
		header("Location: admin.php");
		exit;
	} else {
		// jika salah tampilkan pesan kesalahan
		$error = true;
	}
}

// Kelemahannya masih bisa di bypass dgn masuk langsung ke admin.php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php if ( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">Password / Username salah</p>	
<?php endif; ?>
<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username : </label>
			<input type="text" name="nama" id="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="pass" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Kirim</button>
		</li>

	</form>
</ul>

</body>
</html>
