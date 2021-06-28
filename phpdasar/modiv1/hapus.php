<?php
session_start();
if ( $_SESSION["user"] !== "administrator" ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$id = $_GET["id"]; 
 if ( hapus($id) ) {
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
