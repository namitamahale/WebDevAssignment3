<?php

ini_set('display_errors', 1);
error_reporting(~0); 

$strKeyword = null;
if(isset($_POST["txtKeyword"]))
{
$strKeyword = $_POST["txtKeyword"];
}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">

<br>
<br>
<center><h3> Seller's Books Details </h3></center>
<hr>
<br>
<center><table width="599" border="0">
<tr>
<input name="txtKeyword" type="text" id="txtKeyword" placeholder="Search for book" value="<?php echo $strKeyword;?>">

<input type="submit" value="Search"></th>
</tr>
</table></center>
<br>
</form>

<?php
	include('conns.php');

$sql = "SELECT * FROM addvertise WHERE title LIKE '%".$strKeyword."%' ";
$query = mysqli_query($conn,$sql);

?>
<div class="container">
<div class="contain">
<div class="table-responsive">

<table class="table table-bordered table-striped table-hover text-center">
<thead>
<th> Name </th>
<th> Personal Address </th>
<th> Phone Number </th>
<th> Email-Id </th>
<th></th>
<th> Addvertise On </th>
<th> Title </th>
<th> Body </th>
<th> Location </th>
<th> Contact Number </th>
<th> Email-Id </th>
<th> Image </th>
<th> Details </th>
<th>Edit </th>
<th>Delete </th>
</thead>

<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>

<td> <?php echo $result['name']; ?> </td>
<td> <?php echo $result['PAddress']; ?> </td>
<td> <?php echo $result['Phno']; ?> </td>
<td> <?php echo $result['Emailid']; ?> </td>
<td></td>
<td> <?php echo $result['AddvertiseOnWhat']; ?> </td>
<td> <?php echo $result['title']; ?> </td>
<td> <?php echo $result['body']; ?> </td>
<td> <?php echo $result['Location']; ?> </td>
<td> <?php echo $result['contact']; ?> </td>
<td> <?php echo $result['AddEmailid']; ?> </td>
<td> <img src=" <?php echo $result['AddImage']; ?>" height="100px" width="100px"> </td>
<td><a href="adddetails.php?id=<?php echo $result['id']; ?>">Details</a></td>
<td><a href="editadd.php?id=<?php echo $result['id']; ?>">Edit</a></td>
<td><a href="deleteadd.php?id=<?php echo $result['id']; ?>">Delete</a></td>
</tr>


<?php
}

?>

</table>
</div>

<?php
mysqli_close($conn);
?>
</div>

<head>
<title>Book Basket</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>


.contain {
background: white;
}

body {
background-repeat: no-repeat;
background-size: cover;
}
</style>
</head>

<body background="images/bg5.jpg">
<br>
<form action="addvertise.php">
<center><input type="submit" name="submit" value="Back To Home"></center>
<br>
</form>
</body>