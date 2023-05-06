<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "bookbasket";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>Book Basket</title>
<style>
* {
box-sizing: border-box;
}

img {
  vertical-align: middle;
  float: left;
  padding-right: 50px;
}

.container {
width:50%;
height: 50%;
border: 4px solid Yellow;
border-radius: 6px;
background: white;
padding-left: 30px;
padding-bottom: 30px;
}

.left{
width:20%;
height: 100%;
background: white;
float:left;
}
.right{
width:60%;
height: 100%;
background: white;
float:right;
}

.back {
width:100px;
height:30px;
background:Blue;
color:White;
border:none;
border-radius:4px;
}

.back:hover {
opacity: .6;
}

.ok:hover {
opacity: .6;
}

.ok {
width:100px;
height:30px;
background:Green;
color:White;
border:none;
border-radius:4px;
}

body {
background-repeat: no-repeat;
background-size: cover;
}
</style>

</head>
<body background="images/bg5.jpg">
<br>
<center><h1>Format Of Your Addvertise</h1></center>
<br><br>
<div class="container">

<?php
	$id=$_GET['id'];
	$querydisplay=mysqli_query($conn,"select * from `addvertise` where id='$id'");
	$result=mysqli_fetch_array($querydisplay);
?>

<h3 style="text-align: center; font-weight: bold"><?php echo $result['title']; ?></h3>
<br>
<div class="left">
<img src=" <?php echo $result['AddImage']; ?>" height="100px" width="200px">
</div>

<div class="right">
<p><?php echo $result['body']; ?></p>
<p><?php echo $result['Location']; ?></p>
<p><?php echo $result['Emailid']; ?></p>
<p><?php echo $result['contact']; ?></p>
</div>
</div>
<br>
<center>
<form action="insertadd.php">
<input type="submit" class="back" name="submit" value="Go Back">
</form>
<br>
<form action="displayalladd.php">
<input type="submit" class="ok" name="submit" value="Ok">
</form>
</center>
</body>
</html>