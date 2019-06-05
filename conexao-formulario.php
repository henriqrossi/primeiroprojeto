<?php

	$username = "root";
	$password = "admin";
	$conn = new PDO('mysql:host=localhost;dbname=projeto_login', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	   

?>