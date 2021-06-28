<?php
session_start();
require 'functions.php';

if ( isset($_SESSION["login"]) ) {
	# code...
	header("Location: index.php");
	exit;
}

if ( isset($_POST["login"]) ) {
	# code...
	$username = $_POST["username"];
	$password = $_POST["password"];

	// var_dump($_POST);

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"); // ambil data di database

	if ( mysqli_num_rows($result) === 1 ) {
		# code...
		$row = mysqli_fetch_assoc($result); // tampung datanya yg diambil lewat query
		if ( password_verify($password, $row["password"]) ) { # jika pw sama dgn yg di database...lakukan...
			# code...
			$_SESSION["login"] = true; 
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
<?php if ( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>	


<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Masukkan username !" autocomplete="off">
		</li> <br>
		<li>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Masukkan password !">
		</li> <br>
		<li>
			<button type="submit" name="login">Login!</button>
		</li>
	</ul>
</form>

</body>
</html>
