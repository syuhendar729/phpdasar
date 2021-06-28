<?php
	// Pertemuan 4 === Funcition ===
	// ada 2 :
	// 1. Built in function --> bawaan
	// 2. User defined function --> user buat sendiri

	/*  Function date/time  */
	// - Mencoba function date
	echo date("l")."<br>" ; // l --> menampilkan hari
	echo date("d")."<br>" ; // d --> tanggal
	echo date("M , m")."<br>" ; // M --> nama bulan, m --> bulan ke-
	echo date("l, d-M-Y")."<br><br>" ; // Y --> tahun

	// - Mencoba function time
	echo time()."<br><br>" ; // time() --> detik yg bergerak dr tgl 1 Januari 1970 sampai skrg
	echo date("l", time()+ 60*60*24*99)."<br><br>" ; // "l", time() --> menampilkan hari sari time() atau skrg
	// time()+ x --> wktu skrg ditambah x detik

	// - Mencoba function mktime
	// mktime(0, 0, 0, 0, 0, 0) --> (jam, menit, detik, tanggal, bulan, tahun)
	echo mktime(0, 0, 0, 29, 07, 2004)."<br>" ; 
	echo date("l", mktime(0, 1, 1, 29, 07, 2004))."<br><br>" ;

	// - Mencoba function strtotime
	echo strtotime("02 jan 1970")."<br>" ;
	echo date("l", strtotime("05 oct 2020"))."<br>" ;

	//Function yg sering dipake :
		// Date/ Time
			// time()
			// date()
			// mktime()
			// strtotime()
		// String
			// strlen() --> menghitung panjang dr string
			// strcmp() --> menggabungkan 2 buah string
			// explode() --> memecah 2 buah string
			// htmlspecialchars() --> menjaga dr hekel
		// Utility
			// var_dump() --> mencetak isi dr variabel
			// isset() --> mengecek sebuah var pernah dibikin atau blum. Menghasilkan nilai boolean, klo var blum pernah dibikin maka akan menghailkan nilai false
			// empty() --> mengecek apakah var yg ada kosong atau tidak
			// die() --> memberhentikan program kita, klo dipakai maka program yg bawahnya tdk akan dijalankan
			// sleep() --> menghentikan sementara


		//echo date("")










?>
