<?php
	// Pengondisian konsepnya sama dengan di javascript
	// menggunakan --> if else , if else if else , switch , ternary
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengondisian</title>
	<style>
		.warna-tabel {
			background-color: silver;
		}
	</style>
</head>
<body>
	<h3>Membuat tabel berwarna dengan pengondisian</h3>
	<table border="2" cellpadding="10" cellspacing="0">
		<?php for ($i=1; $i <= 6 ; $i++) : // dibuka pake :?>
			<!-- baris genap akan berwarna abu2 -->
			<?php  if( $i % 2 == 0 ) :?>
				<tr class="warna-tabel">
			<?php else : ?>
				<tr>
			<?php endif; ?>

				<?php for ($j=1; $j <= 5 ; $j++) { ?>
					<td> <?= "$i-$j"; // = disitu diartikan `php echo` ?> </td>
				<?php }; ?>	
			</tr>
		<?php endfor;  // biar tdk bingung bisa buka pake : dan tutupnya pake endfor ?>

</body>
</html>
