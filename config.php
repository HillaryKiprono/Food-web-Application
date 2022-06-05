<?php
	$conn = new mysqli("localhost","root","","kibumessdb");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>