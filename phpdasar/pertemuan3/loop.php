<?php

// ====== Pengulangan (looping) ======
	// menggunakan --> for , while , do.. while , foreach
	// foreach --> biasa utk array
	// biasanya ada inisialisasi , kondisi , dan increament/decreament
	// contoh :
	echo "<h4>for</h4>";
	for ($a=0; $a < 5 ; $a++) { 
		# code...
		echo "Hallo Dunia -->for <br>";
	}
	echo "<br> <h4>while</h4>";

	$b = 0;
	while ( $b < 5 ) {
		# code...
		echo "Hello World -->while <br>" ;
		$b++;
	} // Utk while inisialisasi , kondisi , dan increament/decreament beda tempat dgn for


	echo "<br> <h4>do..while</h4>";
	$c = 10;
	do { 
		# code...
		echo "Halo bro -->do..while <br> ";
		$c++;
	} while ( $c < 5 ); // Utk do.. while bedanya sama while jika kondisiny `false` bloknya tetap akan dijalankan dlu 1x

	

















?>
