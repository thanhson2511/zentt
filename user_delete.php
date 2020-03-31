<?php 
	require_once 'connect.php';
	$id = $_GET['id'];
	$query = "DELETE FROM users WHERE id=$id";
	$status = $conn->query($query);
	header("Location: users.php");
 ?>