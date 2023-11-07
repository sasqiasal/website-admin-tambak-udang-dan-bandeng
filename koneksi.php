<?php

$server 	= "localhost";
$username	= "root";
$pass		= "";
$db 		= "tambak";

$conn = mysqli_connect($server, $username, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>