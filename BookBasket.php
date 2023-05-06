<?php
session_start();
if(!isset($_SESSION['username'])){
}
?>
<?php 
$connect = mysqli_connect("localhost", "root", "", "bookbasket");
 
if(isset($_POST["add_to_cart"]))
{
 if(isset($_SESSION["shopping_cart"]))
 {
 $item_array_id = array_column($_SESSION["shopping_cart"], "id");
 if(!in_array($_GET["id"], $item_array_id))
 {
 $count = count($_SESSION["shopping_cart"]);
 $item_array = array(
 'id' => $_GET["id"],
 'NameOfBook' => $_POST["hidden_name"],
 'SellingPrice' => $_POST["hidden_price"] );
 $_SESSION["shopping_cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
echo '<script>window.location="BookBasket.php"</script>';
 }
 }
 else
 {
 $item_array = array(
 'id' => $_GET["id"],
 'NameOfBook' => $_POST["hidden_name"],
 'SellingPrice' => $_POST["hidden_price"]
 );
 $_SESSION["shopping_cart"][0] = $item_array;
 }
}
 
if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 if($values["id"] == $_GET["id"])
 {
 unset($_SESSION["shopping_cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="BookBasket.php"</script>';
 }
 }
 }
}
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Basket</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='css/stylesss.css' type='text/css' media='all' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="css/c.css">

<style>
* {
box-sizing: border-box;
}
body {
font-family: Verdana, sans-serif; 
margin-left: 5;
  margin-right: 5;
}
.mySlides {
display: none
}
img {
vertical-align: middle;
}

/*g*/

.topnav a:hover {
  background-color:LightBlue;
}

div.gallery {
margin-left:30px;
margin-right:30px;
margin-bottom:30px;
margin-top:15px;
float: left;
border: 1px solid black;
width: 160px;
height:160px;
}

div.gallery img {
width: 100%;
height: 100%;
}


div.gallery:hover {
border: 4px solid Blue;
}

div.desc {
height:100px;
padding: 15px;
text-align: center;
}

fieldset {
margin-left:0;
margin-right:0;
margin-bottom:5px;
margin-top:5px;
height: 375px;
}

p{
color:Blue; 
margin-left:0;
margin-right:0;
margin-bottom:5px;
margin-top:5px;
}

.a:hover {
text-decoration: none;
cursor: pointer;
color:Red; 
}

.a {
text-decoration: none;
color: blue;
}

/*----*/

/* Slideshow container */
.slideshow-container {
  
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: LightGrey;
  color: Black;
  text-decoration: none;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/5 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.price {
background: none repeat scroll 0 0 #F7F7F7;
color: #383838;
font-size: 12px;
font-weight: bold;
line-height: 16px;
margin: 17px 0 10px;
padding: 6px 0 6px 8px;
}

.st {
color: #7F7F7F;
font-size: 11px;
line-height: 16px;
margin-right: 3px;
}

.usual {
color: #7F7F7F;
font-size: 12px;
font-weight: normal;
line-height: 16px;
padding-right: 6px;
text-decoration: line-through;
}

.special {
color: #FD7A01;    
font-weight: bold;
text-decoration: none;
}

.topnav a:hover {
  background-color:LightBlue;
 margin: 0;
}

/* The sidebar menu */
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: White; 
  overflow-x: hidden; 
  overflow-y: hidden; 
  padding-top: 60px;
  transition: 0.5s;
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 16px;
  display: block;
  transition: 0.3s;
  color:#ff3399;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #ff1a8c;
  background: LightPink;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  right: 10px;
  font-size: 30px;
  margin-left: 50px;
}

.sidebar .closebtn:hover {
  position: absolute;
  background:none;
  right: 10px;
  font-size: 30px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: Pink;
  color: white;
  padding: 10px 15px;
  border: none;
float:left;
}

.openbtn:hover {
  background-color: none;
float:left;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 0px;}
  .sidebar a {font-size: 18px;}
}

.s{
background: #ff3399;
color: White;
}

.aa{
color:Blue; 
text-decoration:none;
}

.aa:hover{
text-decoration:none;
background:LightPink;
color:#ff1a8c;
}

//drop down//

.dropbtn {
  background-color: none;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  font-size: 15px;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #none;}

//footer//
//footer//
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
   margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.f {
text-decoration: none;
}

.f:hover {
color: red;
text-decoration: underline;
}

.container1 {
  background: pink;
  padding: 0 16px;
}

.container1::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.cart_div {
	float:left;
        left: 1100px;
        top: 23px;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: #F68B1E;
    padding: 2px;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    top: -6px;
    left: 16px;
    color: White;
    width: 18px;
    height: 20px;
    text-align: center;
	}

</style>
</head>
 <body>


<div class="topnav1">
<img src="images/logo.png" width="130px">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font face="sans-serif" size="5" color="Black">

<span style="color:Black;font-weight:bold">Book Basket</span>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="Sell Yor book form.php"><span style="font-size:18px; color:Green; font-weight:bold"><i class="fa fa-plus"></i></span></a>&nbsp&nbsp
<div class="dropdown">
  <a href="#"class="dropbtn"><i class="fa fa-fw fa-user"></i></a>&nbsp&nbsp
  <div class="dropdown-content">
 <p style="color:black; font-size:15px">&nbsp&nbsp Account</p>
  <p style="color:blue; font-size:16px; font-weight:bold">&nbsp <?php echo $_SESSION['username']; ?></p>
<hr>
<a href="logout.php"><span style="color:Red; font-size:16px; font-weight:bold">&nbsp&nbsp&nbsp&nbsp Logout</span></a>
  </div>
</div>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart1.php"><img src="images/cart-icon.png" /><span><?php echo $cart_count; ?></span></a>
<?php
}
?>
</div>


</font>
</div>


<img src="images/bbg1.png" style="width: 100%; height: 300px">

<div class="topnav" style="background: Pink">




<div class="menu-log"> 
<div id="main">
<font size="5" color="white">

 <button class="openbtn" onclick="openNav()"><i class="fa fa-bars"> Menu</i></font></button> 
 
<div class="menu"> 
<div id="mySidebar" class="sidebar">
  
 
<div class="s"> 
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:black">&times;</a>
<br><br>
<h4><center>Welcome <?php echo $_SESSION['username']; ?></h4></center> 
<center><a href="logout.php" style="color:Blue">Logout</a></center>
</div>
<br>

  <a href="cart1.php">My Cart</a>
  <a href="chatsystem.php">Chat</a>
  <a href="map1.html">Book Shops Near Me</a>
  <a href="displayalladd.php">Advertisement</a>
  <a href="index1.php">Talent Showcase</a>
  <a href="Level1.html">Play Quiz</a>
  <a href="Sell Yor book form.php">Sell Books</a>
  <a href="addvertise.php">Add Your Advertisement</a>
  <a href="feedback.html">Give Feedback</a>
</div>
</div>
</div>
</div>

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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<center><table width="599" border="0">
<tr>
<th>
<center><input name="txtKeyword" type="text" id="txtKeyword" placeholder="Search for book" style="max-width:300px; height:30px; font-size:15px" value="<?php echo $strKeyword;?>">
<input type="submit" value="Search" style="height:32px; font-size:15px"></center></th>
</tr>
</table></center>
<br>
</form>

</div>



<br>


<section>
<body>
 <div class="container">
 <?php
 $query = "SELECT * FROM book WHERE NameOfBook LIKE '%".$strKeyword."%' ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
 while($row = mysqli_fetch_array($result))
 {
 ?>

 <div>
 <form method="post" action="cart1.php?action=add&id=<?php echo $row["id"]; ?>">
 <div style="float:left; padding: 10px; text-align: center; font-weight:bold; color:black">

 <img src=" <?php echo $row['BookImage']; ?>" height="100px" width="100px">

 <h4><?php echo $row["NameOfBook"]; ?></h4>

 <h4 style="color:red">RS. <?php echo $row["SellingPrice"]; ?></h4>
 
 <input type="hidden" name="hidden_name" value="<?php echo $row["NameOfBook"]; ?>" />
 
 <input type="hidden" name="hidden_price" value="<?php echo $row["SellingPrice"]; ?>" />
 
 <input type="submit"  style="text-transform: uppercase; background: #F68B1E; border: 1px solid #F68B1E; cursor: pointer; color: #fff; padding: 8px 40px; margin-top: 10px" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
 


 </form>


<form method="post" action="details.php?action=add&id=<?php echo $row["id"]; ?>">

<input type="submit"  name="details" style="margin-top:5px; color: Blue" value="Details" />
 
</form>
 </div>
 </div>

<?php
 }
 }
 ?>
 
 </table>
 </div>
 </div>
 </div>
 <br />
</div>
</body>
</section>


<center><h1><span style="color:Red; font-weight:bold">FEATURES</span>&nbsp&nbsp<span style="color:DarkOrange; font-weight:bold">OF</span>&nbsp&nbsp<span style="color:LightBlue; font-weight:bold">BOOK</span>&nbsp&nbsp<span style="color:LightGreen; font-weight:bold">BASKET</span></h1></center>    
<img src="images/bbfeature.png" width="100%" height="600px">

<footer style="background:pink">
<div class="row">
<div class="column">
 <div class="card">
<div class="container1">
<h3>ABOUT US</h3>
<p1>Ever wanted to buy a book but could not because it was too expensive? worry not! because Bookbasket is here! Bookbasket, has brought fresh and new offers for our customers. Bookbasket team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere. So grab the opportunity now.</p1>
</div></div></div>


<div class="column">
 <div class="card">
<div class="container1">
<h3>INFORMATION</h3>
<p>> <a href="aboutus.html" class="f">About Us</a></p>
<p>> <a href="Sell Yor book form.php" class="f">Sell Your Book</a></p>
<p>> <a href="dbf.php" class="f">Customer Feedbacks</a></p>
<p>> <a href="termsandpolicy.html" class="f">Terms & Conditions</a></p>
<p>> <a href="emoji rate code.html" class="f">Rate Our Website</a></p>
<p>> <a href="addvertise.php" class="f">Add Your Advertisement</a></p>
<p>> <a href="feedback.html" class="f">Give Feedback</a></p>
</div></div></div>


<div class="column">
 <div class="card">
<div class="container1">
<h3>CONTACT US</h3>
<p> <span style="font-size:24px"> Bookbasket </span></p>
<p> <span style="font-size:20px"> Whatsapp us <img src="images/whatsappi.png" style="height:25px; width:23px"> :</span> 8723994410</p>
<p> <span style="font-size:20px"> Email id <img src="images/email.png" style="height:25px; width:23px"> :</span> bookbasket2021@gmail.com</p>
<p> <span style="font-size:20px"> Find us on :  </span><img src="images/insta.png" style="height:25px; width:23px">  bookbasket21</p>
</div></div></div></div>

</footer>

<script type="text/javascript">
var noti = document.querySelector('h1');
var select = document.querySelector('.select');
var button = document.getElementsByTagName('button');
for(but of button)
{
but.addEventListener('click',(e)=>{
var add = Number(noti.getAttribute('data-count')|| 0);
noti.setAttribute('data-count', add + 1);
noti.classList.add('zero');

//copy and paste element//
var parent = e.target.parentNode;
var clone = parent.cloneNode(true);
select.appendChild(clone);
clone.lastElementChild.innerText = "Buy-now";
if (clone) {
noti.onclick =()=>{
select.classList.toggle('display');
}
}

//image animation to cart///
var image = e.target.parentNode.querySelector('img');
var span = e.target.parentNode.querySelector('span');
var s_image = image.colneNode(false);
span.appendChild(s_image);
span.classList.add('active');
setTimeout(()=>{
span.removeChild(s_image);
span.classList.remove('active');
}, 500);
})
}
</script>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html> 
