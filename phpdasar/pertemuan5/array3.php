<?php
	// Contoh peng-aplikasian
		// dan menggunakan array multidimensi --> array di dalam array
		// array mulitidimensi --> $arr = [1,2,3,[0,1,"jdao"]]

	$siswa = ["Suada", "XI", "IPA", "BP"]; 
			
?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar siswa</title>
</head>
<body>
	<h3>Daftar Siswa</h3>
	<!-- cara manual -->
	<ul>
		<li>Suada</li>
		<li>XI</li>
		<li>IPA2</li>
		<li>BP</li>
		<!-- Selanjutnya menampilkan list seperti ini dengan array php -->
	</ul> 

	<!-- cara1 -->
	<ul>
		<?php foreach ( $siswa as $key ) { ?>
			<li><?php echo $key; ?></li>
		<?php  }?>
	</ul>
	<!-- cara2 -->
	<ul>
		<li><?php echo $siswa[0]; ?></li>
		<li><?php echo $siswa[1]; ?></li>
		<li><?php echo $siswa[2]; ?></li>
		<li><?php echo $siswa[3]; ?></li>
	</ul>
	<?php echo "================Menggunakan Array multidimensi=================="; ?>

<?php
	// Contoh peng-aplikasian
		// dan menggunakan array multidimensi --> array di dalam array
		// array mulitidimensi --> $arr = [1,2,3,[0,1,"jdao"]]

	$siswa2 = [
			["Suada", "XI", "IPA", "BP"], 
			["Soda", "XII", "PK", "Bapenta"],
			["Rantisi", "X", "IPS", "Lugoh"],
			["Syuhendar", "IX", "IPA", "LH"],
			["Syuhendar", "IX", "IPA", "LH"]
			];
?>

<?php foreach ($siswa2 as $key ) { ?>
	</ul>
	<!-- cara menampilkan array multidimensi -->
	<ul>
		<li>Nama : <?php echo $key[0]; ?></li>
		<li>Kelas : <?php echo $key[1]; ?></li>
		<li>Jurusan : <?php echo $key[2]; ?></li>
		<li>Bidang : <?php echo $key[3]; ?></li>
	</ul>

<?php } ?>

<!-- Note: array di atas adalah array Numerik, jd harus sesuai urutan index arrayny kita nulis 
	Selanjutny akan dibahas array Asosiatif, yg indexnya sudah bukan angka
-->



</body>
</html>








