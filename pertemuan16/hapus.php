<?php

// Halaman hapus.php tidak berisi html.
// hanya berisi konfirmasi penghapusan dgn alert javascript dan redirect ke halaman asli lagi

require 'functions.php';

$id = $_GET["id"]; // $id --> adalah parameter yg ada di function `hapus`
// lalu akan diisikan oleh id yg di-request dgn metode `get` oleh link di halaman index.php

 if ( hapus($id) ) {
 	# code...
 	echo "
				<script>
					alert('Data berhasil dihapus');
					document.location.href = 'index.php';
				</script>
			"; // 
 } else {
 	echo "
				<script>
					alert('Data GAGAL!! dihapus');
					document.location.href = 'index.php';
				</script>
			";
 }

?>
