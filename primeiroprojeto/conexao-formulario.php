<?php
$conn = new mysqli ("localhost", "root", "admin", "projeto_login");
	/* check connection */
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
	   

?>