<?php
// Pertemuan2 PHP-Dasar
// Sintaks PHP

// Standar Outout --> echo , print , print_r , var_dump
echo "======STANDAR_OUTPUT======<br>";
echo "Hello World pake echo <br>";
print "Hello World pake print <br>"; // \n --> gk ngaruh
print_r("Halo Dunia pake print_r <br>");
var_dump("1" == 1);

// ====== Sintaks PHP ======
	// 1. PHP bisa dalam HTML
	// 2. HTML bisa dalam PHP

// ====== STANDAR_OUTPUT ======
	// 1. Penulisan menggunakan $
	// 2. aturan seperti biasa
	//contoh :
	echo "<br><br>======VARIABEL======<br>";
	$name = "Syuhendar";
	echo "Nama gua :" . " " . $name . "<br><br>" ;

// ====== Operator aritmatika ======
	// + , - , * , / , %
	//contoh :
	echo "======OPERATOR_ARITMATIKA======<br>";
 	echo 10 + 20 . "<br>" ;
 	echo 100 % 50 . "<br>" ;
 	echo 100 / 5 . "<br><br>" ;


// ====== Operator penggabung string / concatenatioan / concat ======
	// dengan tanda . (titik)
	// Seperti diatas
 	echo "====== Operator penggabung string / concatenatioan / concat ======<br>";
	echo "Seperti kodingan sebelumnya <br><br>";

// Operator penugasan / assignment
	// = , += , -= , *= , /= , %= , .= 
	echo "====== Operator penugasan / assignment ======<br>";
	$x = 1;
	$x += 3;
	echo $x . "<br>" ;
	$gua = "Suada";
	$gua .= " Rantisi";
	echo $gua . "<br>" ;

// Operator perbandingan 
	// < , > , <= , >= , == , !=
	echo "<br>====== OPERATOR PERBANDINGAN ======<br>";
	var_dump( 1 > 5 );
	echo "<br>";
	echo 5 < 100;

// Operator identitas 
	// === , !==
	echo "<br><br>====== OPERATOR IDENTITAS ======<br>";
	echo 1 === 1 ;
	echo "<br>";
	var_dump( 1 !== "1");

// Operator logika
	// && , || , !
	echo "<br><br>====== OPERATOR LOGIKA  ======<br>";
	var_dump( 1 == 1 && "sr" === "sr"); //--> klo && 22nya harus true, klo 1 false yg ditampilkan false 
	echo "<br>";
	var_dump( 1 == 1 || "1" === 1 ); //--> kli || cukup 1 saja nilainya true maka akan ditampilkan true



?>

<!DOCTYPE html>
<html>
<head>
	<title>pertemuan2</title>
</head>
<body>
	<h1>Hai bro, apa kabar? <?php 
		echo "<br>Sehat";
		echo " bro";
	?></h1>


</body>
</html>






















