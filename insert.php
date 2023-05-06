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
	include('conn.php');

$sql = "SELECT * FROM book WHERE NameOfBook LIKE '%".$strKeyword."%' ";
$query = mysqli_query($conn,$sql);

?>
<div class="container">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover text-center">
			<thead>
				<th> NameOfBook </th>
<th> BookAuthorName </th>
<th> DescriptionOfBook </th>
<th> NumberOfPages </th>
<th> EdditionOfBook </th>
<th> BindingOfBook </th>
<th> CoverOfBook </th>
<th> Category </th>
<th> SuitableFor </th>
<th> ActualPrice </th>
<th> SellingPrice </th>
<th> BookImage </th>
<th> SName </th>
<th> SEId </th>
<th> SPhoNo </th>
<th> SAdd </th>
<th> BookStore </th>
<th> Details </th>
<th>Edit </th>
<th>Delete </th>
                                
				<th></th>
			</thead>


<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<tr>
<td> <?php echo $result['NameOfBook']; ?> </td>
<td> <?php echo $result['BookAuthorName']; ?> </td>
<td> <?php echo $result['DescriptionOfBook']; ?> </td>
<td> <?php echo $result['NumberOfPages']; ?> </td>
<td> <?php echo $result['EdditionOfBook']; ?> </td>
<td> <?php echo $result['BindingOfBook']; ?> </td>
<td> <?php echo $result['CoverOfBook']; ?> </td>
<td> <?php echo $result['Category']; ?> </td>
<td> <?php echo $result['SuitableFor']; ?> </td>
<td> <?php echo $result['ActualPrice']; ?> </td>
<td> <?php echo $result['SellingPrice']; ?> </td>
<td> <img src=" <?php echo $result['BookImage']; ?>" height="100px" width="100px"> </td>
<td> <?php echo $result['SName']; ?> </td>
<td> <?php echo $result['SEId']; ?> </td>
<td> <?php echo $result['SPhoNo']; ?> </td>
<td> <?php echo $result['SAdd']; ?> </td>
<td> <?php echo $result['BookStore']; ?> </td>
<td><a href="sdetails.php?id=<?php echo $result['id']; ?>">Details</a></td>
<td><a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
				
				</tr>

<?php
}

?>
</div>

</table>
</div>

<?php
mysqli_close($conn);
?>

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
body {
background:#ccffcc;
}

.container {
background:#ffff;
width: 85%;
}

.s:hover {
opacity: .6;
}

</style>
</head>

<body>
<br>
<form action="BookBasket.php">
<center><input type="submit" name="submit" class="s" style="background-color: Blue; border: solid black 1px; color: white; padding: 10px 22px; margin: 4px 2px; cursor: pointer" value="Back To Home"></center>
<br>
</form>
</body>