<?php
	$id=$_GET['id'];
	include('conns.php');
	mysqli_query($conn,"delete from `addvertise` where id='$id'");
	header('location:insertadd.php');
?>