<?php
// session_start();
// if ( !isset($_SESSION["login"]) ) {
// 	# code...
// 	header("Location: login.php");
// 	exit;
// }

require 'functions.php';

if ( isset($_POST["register"]) ) {
	# code...
	if ( registrasi($_POST) > 0 ) {
		# code...
		echo "<script>alert('User berhasil ditambahkan')</script> ";
		echo "<script>alert('Silahkan login kembali :)')</script> ";
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
                				<h1 class="h4 text-gray-900 mb-4">Registration Page</h1>
								<?php if ( isset($error) ) : ?>
								<p style="color: red; font-style: italic;">username / password salah</p>
								<?php endif; ?>	
              				</div>
								<form action="" method="post">
									<div class="form-group">
										<label for="username">Username :</label>
										<input type="text" name="username" id="username" autocomplete="off" class="form-control form-control-user">
									</div>
										<label for="password">Password :</label>
										<input type="password" name="password" id="password" class="form-control form-control-user">
									<div class="form-group">
										<label for="password2">Konfirmasi Password :</label>
										<input type="password" name="password2" id="password2" class="form-control form-control-user">
									</div>
										<button type="submit" name="register" class="btn btn-primary btn-user btn-block">Registrasi!</button> <br> <br>
									<div class="text-center">
										<label>Jika sudah silahkan login kembali ! :)</label>
										<a href="login.php">Login!</a>
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
