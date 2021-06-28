<?php
// Koneksi ke database mysql
$conn = mysqli_connect("localhost", "root", "", "anime"); // --> dari localhost, user root, pw nya kosong, dan nama databasenya anime

function query($query){
	# code...
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		# code...
		$rows[] = $row;
	};
	return $rows;
}

?>
