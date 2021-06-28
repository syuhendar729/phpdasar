<?php
session_start();
require 'functions.php';

if ( isset($_SESSION["login"]) ) {

	header("Location: index.php");
	exit;
}

if ( isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["password"]) ) {
	$username = addslashes( trim($_POST["username"]) );
	$password = $_POST["password"];
	
	if ( $username == "administrator" && $password == "729729" ) {
		$_SESSION["login"] = true; 
		$_SESSION["user"] = $_POST["username"]; 
		header("Location: admin.php");
		exit;
	}

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"); 
	
	if ( mysqli_num_rows($result) === 1 ) {
		
		$row = mysqli_fetch_assoc($result);
		if ( password_verify($password, $row["password"] ) ) { 
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
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-reboot.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style>
		body {
			background-color: green;
		}
	</style>
</head>
<body>
	


<div class="container">
<div class="row justify-content-center">
	<div class="col-lg-7">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="ard-body p-0">
				<div class="row">
					<div class="col-lg">
						<div class="p-5">
							<div class="text-center">
                				<h1 class="h4 text-gray-900 mb-4">Login Page</h1>
								<?php if ( isset($error) ) : ?>
								<p style="color: red; font-style: italic;">username / password salah</p>
								<?php endif; ?>	
              				</div>	
							<form action="" method="post" class="user">
									<div class="form-group"> 
										<label for="username">Username</label>
										<input type="text" name="username" id="username" placeholder="Masukkan username !" autocomplete="off" autofocus="" class="form-control form-control-user">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" placeholder="Masukkan password !" class="form-control form-control-user">
									</div>
									
										<button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login!</button>
									<div class="text-center">
				                    <a class="small" href="registrasi.php">Create an Account!</a>
				                  </div>
								
							</form>
						</div>	
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>


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

