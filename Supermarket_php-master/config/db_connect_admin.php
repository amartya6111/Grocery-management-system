<?php 

	//PDO or MySQLI to connect

	$connect = mysqli_connect('localhost', 'root', '', 'supermarketdb');

	// check connection

	if (!$connect) {
		echo "Connection error: " . msqli_connect_error();
	}

 ?>