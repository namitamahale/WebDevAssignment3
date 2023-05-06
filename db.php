<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bookbasket');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];

$s = "select * from loginregister where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($pass == $pass2){

if($num == 1){
echo "<div class='container1'>User Record Already Taken.
<br><br>
<form action='loginregister.php'>
<input type='submit' class='btn' value='OK'>
</form>
</div>";

}else{
$reg= "insert into loginregister(name , email , password) values ('$name' , '$email' , '$pass')";
mysqli_query($con, $reg);
echo "<div class='container'>Registration Successful.
<br><br>
<form action='loginregister.php'>
<input type='submit' class='btn' value='OK'>
</form>
</div>";
}
}else{
echo "<div class='container2'>Password is not correct.
<br><br>
<form action='loginregister.php'>
<input type='submit' class='btn' value='OK'>
</form>
</div>";
}
?> 

?> 
<head>
<title>Book Basket</title>
</head>
<body>
<style>
.container{
height:80px;
width:380px;
text-align:center;
margin: 6% auto;
font-size: 20px;
font-weight: bold;
color: Green;
position:relative;
background:#f7f7f7;
padding: 5px;
margin-bottom: 10px;
background: #f7f7f7;
box-shadow: 0px 2px 2px rgba(0.3, 0.3, 0.3, 0.3);
padding: 30px;
}

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

.container2{
height:80px;
width:380px;
text-align:center;
margin: 6% auto;
font-size: 20px;
font-weight: bold;
color: Blue;
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