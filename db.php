<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'galerifoto1';
	
	$db = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
?>