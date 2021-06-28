<?php
session_start();
require 'functions.php';

if ( isset($_SESSION["login"]) ) {
	# code...
	header("Location: index.php");
	exit;
}

if ( isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["password"]) ) {
	# code...
	$username = addslashes( trim($_POST["username"]) );
	$password = $_POST["password"];

	// alihkan klo username dan pw nya gk ada
	// if ( $_POST["username"] == '' || $_POST["password"] == '' || $_POST["username"] == "" || $_POST["password"] == "" ) {
	// 	$error = true;
	// }

	// var_dump($_POST);

	// ambil data di database
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"); 
	
	if ( mysqli_num_rows($result) === 1 ) {
		
		$row = mysqli_fetch_assoc($result);
		if ( password_verify($password, $row["password"] ) ) { # jika pw sama dgn yg di database...lakukan...
			# code...
			$_SESSION["login"] = true; 
			$_SESSION["user"] = $_POST["username"]; 
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
			<input type="text" name="username" id="username" placeholder="Masukkan username !" autocomplete="off" autofocus="">
		</li> <br>
		<li>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Masukkan password !">
		</li> <br>
		<li>
			<button type="submit" name="login">Login!</button>
		</li> <br> <br>
		<li>
			<label>Belum punya akun? Silahkan </label>
			<a href="registrasi.php">Register!</a>
		</li>
	</ul>
</form>

</body>
</html>



<!-- Cth. Kode injeksi -->
<!--  ' or ''='
 ' or '1'='1
 ' or 'x'='x
 " or 0=0 --
 or 0=0 --
 ' or 0=0 #
 " or 0=0 #
 or 0=0 #
 ' or 'x'='x
 " or "x"="x' 
 or 1=1--
 " or 1=1--
 or 1=1--
 ' or a=a--
 " or "a"="a
 ') or ('a'='a -->


<!-- || $_POST["username"] == "' or 0=0 --" || $_POST["password"] == "' or 0=0 --" 	
|| $_POST["username"] == '" or 0=0 --' || $_POST["password"] == '" or 0=0 --' 	
|| $_POST["username"] == 'or 0=0 --' || $_POST["password"] == 'or 0=0 --' 	
|| $_POST["username"] == '" or 0=0 #' || $_POST["password"] == '" or 0=0 #' 	
|| $_POST["username"] == 'or 0=0 #' || $_POST["password"] == 'or 0=0 #'
 -->

