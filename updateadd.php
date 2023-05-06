<?php
	include('conns.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$PAddress=$_POST['PAddress'];
        $Phno=$_POST['Phno'];
        $Emailid=$_POST['Emailid'];
        $AddvertiseOnWhat=$_POST['AddvertiseOnWhat'];
        $title=$_POST['title'];
        $body=$_POST['body'];
        $Location=$_POST['Location'];
        $contact=$_POST['contact'];
        $AddEmailid=$_POST['AddEmailid'];
      

	mysqli_query($conn,"update `addvertise` set name='$name', PAddress='$PAddress', Phno='$Phno', Emailid='$Emailid', AddvertiseOnWhat='$AddvertiseOnWhat', title='$title', body='$body', Location='$Location', contact='$contact', AddEmailid='$AddEmailid' where id='$id'");
	
header('location:insertadd.php');
?>