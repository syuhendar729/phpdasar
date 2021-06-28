<?php

// Array --> variabel yg dapat memiliki banyk data
	// --> bisa jg diartikan pasangan key and value
	// key --> index yg dimulai dr 0
	// value --> data di indexnya

// mirip dgn array di JS
// cara penulisan
	// cara lama :
	$hari = array("Senin", "Selasa", "Rabu", "Kamis" );
	// cara baru : --> seperti di JS
	$bulan = ["Jan", "Feb", "Mar", "April", "Mei"];
// Dalam 1 array bisa lebih dr 1 tipe data
$arr1 = [111, "Sauda", true];


// Cara menampilkan array 
	echo $arr1 ; // --> error
	echo $arr1[1]; // --> akan ditampilkan index 1 yaitu 'Sauda'
echo "<br><br>";
	
	var_dump($arr1); // --> ditampilkan semua data di $arr1 lengkap semuany
echo "<br><br>";

	print_r($arr1); // -->  ditampilkan semua data di $arr1 besrta key and value-nya

// Cara menambahkan data pada array
	echo "<br><br>";

	$hari[] = "Jumat";
	$hari[] = "Sabtu";

	print_r($hari); // --> hari jumat dan sabtu ditambahkan














?>
