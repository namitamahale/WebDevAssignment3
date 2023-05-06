<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bookbasket');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from loginregister where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
$_SESSION['username'] = $name;
header('location:BookBasket.php');
}else{
echo "<div class='container1'>Username and Password is incorrect.
<br><br>
<form action='loginregister.php'>
<input type='submit' class='btn' value='OK'>
</form>
</div>";
}
?>

<head>
<title>Book Basket</title>
</head>
<body>
<style>
.container1{
height:80px;
width:380px;
text-align:center;
margin: 6% auto;
font-size: 20px;
font-weight: bold;
color: Red;
position:relative;
background:#f7f7f7;
padding: 5px;
margin-bottom: 10px;
background: #f7f7f7;
box-shadow: 0px 2px 2px rgba(0.3, 0.3, 0.3, 0.3);
padding: 30px;
}

.btn{
width: 200px;
height: 40px;
background: #4CAF50;
color: white;
font-weight: bold;
font-size: 16px;
border:none;
}

.btn:hover{
width: 200px;
height: 40px;
background: #3e8e41;
color: white;
font-weight: bold;
font-size: 16px;
border:none;
}
</style>

</body> 