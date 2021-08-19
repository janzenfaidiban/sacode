<?php

// $this->connect = new PDO("mysql:host=localhost;dbname=sakodeko_api", "sakodeko_api", "s4c0d3_2021");

$servername = "localhost";
	$username = "sakodeko_api";
	$password = "s4c0d3_2021";
	$database = "sakodeko_api";

	// Membuat Koneksi
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Mengecek Koneksi
	if (!$connection) {
	    die("Connection failed: " . mysqli_connect_error());
	} else {
	    echo "Success!";
	}
?>