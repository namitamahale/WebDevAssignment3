<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "bookbasket";
 
$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'bookbasket');
if(isset($_POST['submit'])){

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

$AddImage = $_FILES['myfile'];

print_r($name);
echo "<br>";
// print_r($AddImage);

$filename = $AddImage['name'];
$fileerror = $AddImage['error'];
$filetmp = $AddImage['tmp_name'];
$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png', 'jpg', 'jpeg');

if(in_array($filecheck,$fileextstored)){
$destinationfile = 'add/' .$filename;
move_uploaded_file($filetmp,$destinationfile);

$q = "INSERT INTO `addvertise`(`name`, `PAddress`, `Phno`, `Emailid`, `AddvertiseOnWhat`, `title`, `body`, `Location`, `contact`, `AddEmailid`, `AddImage`) VALUES ('$name','$PAddress','$Phno','$Emailid','$AddvertiseOnWhat','$title','$body','$Location','$contact','$AddEmailid','$destinationfile')";

$query = mysqli_query($con,$q);

$displayquery = " select * from addvertise";
$querydisplay = mysqli_query($con,$displayquery);

// $row = mysqli_num_rows($querydisplay);

while ( $result = mysqli_fetch_array($querydisplay) ) {
header('location:insertadd.php');
}
}else{
echo "Extension is not matching";
}
}
?>
