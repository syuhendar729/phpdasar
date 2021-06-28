<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Looping</title>
</head>
<body>
	<h3>Looping untuk buat tabel</h3>
	<table border="2" cellpadding="10" cellspacing="0">
	<!-- <tr>
		<td>1-1</td>
		<td>1-2</td>
		<td>1-3</td>
		<td>1-4</td>
		<td>1-5</td>
	</tr> utk menampilkan tabel seperti ini bisa menggunakan for -->
		
		<!-- cara1  -->
		<!-- <?php  
				// for ($a=1; $a <= 3 ; $a++) { 
				// 	# code...
				// 	echo "<tr>";

				// 	for ($b=1; $b <= 5 ; $b++) { 
				// 		# code...
				// 		echo "<td>$a-$b</td>";
				// 	}
				// 	echo "</tr>";
				// }
		?> -->

		<!-- cara2 -->
		<?php for ($i=1; $i <= 3 ; $i++) : // dibuka pake :?>
			<tr>
				<?php for ($j=1; $j <= 5 ; $j++) { ?>
					<td> <?= "$i-$j"; // = disitu diartikan `php echo` ?> </td>
				<?php }; ?>	
			</tr>
		<?php endfor;  // biar tdk bingung bisa buka pake : dan tutupnya pake endfor ?>



	</table>
</body>
</html>
				

















































