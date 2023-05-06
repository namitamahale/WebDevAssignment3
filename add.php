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
$NameOfBook=$_POST['NameOfBook'];
$BookAuthorName=$_POST['BookAuthorName'];
$DescriptionOfBook=$_POST['DescriptionOfBook'];
$NumberOfPages=$_POST['NumberOfPages'];
$EdditionOfBook=$_POST['EdditionOfBook'];
$BindingOfBook=$_POST['BindingOfBook'];
$CoverOfBook=$_POST['CoverOfBook'];
$Category=$_POST['Category'];
$SuitableFor=$_POST['SuitableFor'];
$ActualPrice=$_POST['ActualPrice'];
$SellingPrice=$_POST['SellingPrice'];
$BookImage = $_FILES['myfile'];
//$BookImage=$_POST['myfile'];//
$SName=$_POST['SName'];
$SEId=$_POST['SEId'];
$SPhoNo=$_POST['SPhoNo'];
$SAdd=$_POST['SAdd'];
$BookStore=$_POST['BookStore'];

print_r($NameOfBook);
echo "<br>";
// print_r($BookImage);

$filename = $BookImage['name'];
$fileerror = $BookImage['error'];
$filetmp = $BookImage['tmp_name'];
$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png', 'jpg', 'jpeg');

if(in_array($filecheck,$fileextstored)){
$destinationfile = 'upload/' .$filename;
move_uploaded_file($filetmp,$destinationfile);

$q = "INSERT INTO `book`(`NameOfBook`, `BookAuthorName`, `DescriptionOfBook`, `NumberOfPages`, `EdditionOfBook`, `BindingOfBook`, `CoverOfBook`, `Category`, `SuitableFor`, `ActualPrice`, `SellingPrice`, `BookImage`, `SName`, `SEId`, `SPhoNo`, `SAdd`, `BookStore`) VALUES ('$NameOfBook','$BookAuthorName','$DescriptionOfBook','$NumberOfPages','$EdditionOfBook','$BindingOfBook','$CoverOfBook','$Category','$SuitableFor','$ActualPrice','$SellingPrice','$destinationfile','$SName','$SEId','$SPhoNo','$SAdd','$BookStore')";

$query = mysqli_query($con,$q);

$displayquery = " select * from book";
$querydisplay = mysqli_query($con,$displayquery);

// $row = mysqli_num_rows($querydisplay);

while ( $result = mysqli_fetch_array($querydisplay) ) {
header('location:Sell Yor book form.php');
}
}else{
echo "Extension is not matching";
}
}
?>
</tbody>
</table>
