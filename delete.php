<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `book` where id='$id'");
	header('location:insert.php');
?>