<?php
  include_once "config.php";

	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

	if($mysqli->connect_error){
		die("Koneksi Gagal: " . $mysqli->connect_error);
	}
?>