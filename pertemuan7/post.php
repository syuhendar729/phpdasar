<?php

?>


<!DOCTYPE html>
<html>
<head>
	<title>Post PHP</title>
</head>
<body>


<!-- <form action="post2.php" method="post"> --> 
	<!-- kegunaan `action` utk mengirim data ke mana, jika tidak ada maka secara default akan dikirim ke halaman ini -->
	<!-- Kegunaan `method` = metode kirim datanya, jika tidak ada default akan menggunakan metode "get".  Contoh kalau menggunakan "post" maka harus ditangkap degan var $_POST begitu pula dgn  "get" -->
	<!-- Masukkan nama : <input type="text" name="nama"> -->  <!-- name = "nama" berarti nama index di variabel $_POST["nama"] -->
	<!-- <button type="submit" name="submit">Kirim!</button>
</form> -->

<!-- <?php if ( isset($_POST["submit"]) ) :?>
	<h1>Hallo <?php echo $_POST["nama"]; ?></h1>
<?php endif; ?> -->
<br><br>

<form action="" method="post"> <!-- action = "" akan dikembalikan datanya kehalaman ini dgn method = "post" -->
	Masukin Apa aja : <input type="text" name="apaaja">
	<button type="submit" name="submit">Bebas!</button>
</form>
<?php if ( isset($_POST["apaaja"]) ) : ?>
	<h2>Masuk lagi cuk <?php echo $_POST["apaaja"]; ?></h2>
<?php endif; ?> <!-- Kalau kita coba tampilkan data dari $_POST yg diisi user akan tampil -->



</body>
</html>
