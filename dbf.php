<!DOCTYPE html>
<html>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
body {
background:#dfbc9f;
}
.container
{
width:80%;
background-color:white;
margin:auto;
}
</style>

<body>
<center>
<h1>User Feedback Details</h1>
<br>
<div class="container">
<br>
<?php
$server="localhost";
$user="root";
$password1="";

$conn=mysqli_connect($server,$user,$password1);

if(!$conn)
die ("connection unsuccessful".mysqli_error());
 
mysqli_select_db($conn,'bookbasket');

if(isset($_POST['submit'])){
$Name=$_POST['name'];
$Email=$_POST['email'];
$Gender=$_POST['gender'];
$Rate=$_POST['rate'];
$Message=$_POST['message'];

$q="insert into fb values('$Name','$Email','$Gender','$Rate','$Message')";
$insert=mysqli_query($conn,$q);
}

$q="select * from fb";
$result=mysqli_query($conn,$q);

if(mysqli_num_rows($result)>0){
echo "<div class='table-responsive'>
<table class='table table-bordered table-striped table-hover text-center'>
<tr> 
<th>Name</th>
<th>Email</th>
<th>Gender</th>
<th>Rate</th>
<th>Message</th>
</tr>";

while($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Email']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "<td>".$row['Rate']."</td>";
echo "<td>".$row['Message']."</td>";

echo "</tr>";

}
echo "</table>";
echo "</div>";

echo "<br>";
}

else{
echo "empty row(s)";
}

echo "Thank You!!";

echo "<br><br>";
?>

</center>
<center>
</div>
<br>

<form name="form1" method="POST" action="BookBasket.php">
<input type="submit" name="submit" value="Continue">
</center>
</form>
<center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="feedback.html"><button style="background-color: #f2f2f2; border: solid black 1px; color: Black; padding: 5px 15px; margin: 4px 2px; border-radius: 18px; cursor: pointer; text-decoration: none"><i style="font-size:24px; color:Red" class="fa">&#xf067;</i> Add  </button></a>
</center>
<br>
<br>
</body>
</html>