<!DOCTYPE html>
<html>
<head>
	<title>Array Review</title>
	<style>
		.kotak {
			height: 30px;
			width: 30px;
			background-color: salmon;
			margin: 3px;
			text-align: center;
			line-height: 30px;
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
<?php

	// review, cara menampilkan array multidimensi
	$angka = [[1,2,3], [4,5,6], [7,8,9]];
	echo $angka[1][2]."<br>" ; // Tampilkan index 2 dari index 1 array angka yaitu--> 2
	print_r($angka[2][0]). "<br><br>" ;
	?>
	<div class="clear"></div>

	<?php foreach ( $angka as $ank ): ?>
		<?php foreach ( $ank as $a ) : ?>
			<div class="kotak"><?php echo $a; ?></div>
		<?php endforeach; ?>	
		<div class="clear"></div>
	<?php endforeach; ?>

</body>
</html>
