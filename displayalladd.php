<html>
<body background="images/bg5.jpg">
<br>
<br>
<center><h3> Advertise </h3></center>

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
<center><table width="599" border="0">
<tr>
<input name="txtKeyword" type="text" id="txtKeyword" placeholder="Search for adds" value="<?php echo $strKeyword;?>">

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

<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>

 <div style="float:left; padding: 20px; text-align: center; font-weight:bold; color:black; background: white; margin:15px">

<center><h3> <?php echo $result['title']; ?> </h3></center>
<br>
<div class="left">
<p> <img src=" <?php echo $result['AddImage']; ?>" height="100px" width="100px"> </td>
</div>
<div class="right">
<p> <?php echo $result['body']; ?> </p>
<p> <?php echo $result['Location']; ?> </p>
<p> <?php echo $result['contact']; ?> </p>
<p> <?php echo $result['AddEmailid']; ?> </p>
</div>
</div>

<?php
}

?>

<?php
mysqli_close($conn);
?>


<br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="addvertise.php">
<center><input type="submit" class="display" name="submit" value="Add Advertise"></center>
<br>
</form>

<form action="BookBasket.php">
<center><input type="submit" name="submit" style="background-color: Blue; border: solid black 1px; color: white; padding: 10px 22px; margin: 4px 2px; cursor: pointer; text-decoration: none" value="Back To Home"></center>
<br>
</form>
</body>


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
.container {
width: 85%;
height: 100;
}

.block {
border: 2px solid White;
width:30%;
height:300;
background: white;
}

.left {
width:30%;
float: left;
padding-left:10px;
}

.right {
width:50%;
float: right;
padding-right:10px;
}

body {
background-repeat: no-repeat;
background-size: cover;
}

.display {
width: 150px;
height: 40px;
background: Orange;
color: white;
font-weight: bold;
}

.display:hover {
opacity:.8;
}

</style>
</head>


