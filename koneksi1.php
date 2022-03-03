<?php  
	// membuat koneksi database
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'alazhar30bdg_berita_aa30';

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		echo 'Error : '.mysqli_connect_error($conn);
	}
?>