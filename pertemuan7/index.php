<?php
	// Variabel scope & Lingkup variabel
$x = "Hi!";

function tampilx(){
	global $x; // harus menggunakan global utk mengambil variabel yg diluar function
	echo $x;
}

tampilx()




?>
