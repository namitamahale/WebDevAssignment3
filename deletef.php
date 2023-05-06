<?php
	$Name=$_GET['Name'];
	include('con.php');
	mysqli_query($conf,"delete from `fb` where Name='$Name'");
	header('location:dbf.php');
?>