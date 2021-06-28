<?php

// Menampilkan data array ke user

$angka = [29, 07, 05, 28, 888, 9831, 9382, 83, 92];




?>


<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan ke user</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {
			clear: both;
		}

	</style>


</head>
<body>
<!-- 	menampilkan array menggunakan looping -->
	<h2> Menampilkan array menggunakan looping</h2>	
	<?php for ($i=0; $i <= count($angka)-1; $i++) { ?>
		<div class="kotak"><?php echo $angka[$i] ?></div>
	<?php } ?>
	
	<div class="clear"></div>

	
	<?php foreach ($angka as $key ) { ?>
		<div class="kotak"><?php echo $key; ?></div>
	<?php }; ?>

	<div class="clear"></div>

	<?php foreach ($angka as $key2 ) : ?>
		<div class="kotak"><?= $key2; ?></div>
	<?php endforeach; ?>



</body>
</html>













