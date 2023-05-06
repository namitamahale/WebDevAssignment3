<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "bookbasket");

$status=""; 
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
 $status = "<div class='box' style='color:red; text-align:center'>Product is removed from your cart!</div>";

     
 
 }
 }
 }
}
 
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Book Basket</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/c.css"> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
 <br />
 <div class="container">
 <br />
 <br />
 <br />


 <?php
 $query = "SELECT * FROM book ORDER BY id ASC";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
 while($row = mysqli_fetch_array($result))
 {
 ?>
 <?php
 }
}
 ?>
 <div style="clear:both"></div>
 <h2>My Cart</h2>

 <div class="table-responsive">
 <table class="table table-bordered">
 <tr>
 <th width="40%">Item Name</th>
 <th width="20%">Price</th>
 <th width="5%">Action</th>
 <th width="5%">Display</th>
 </tr>
 <?php
 if(!empty($_SESSION["shopping_cart"]))
 {
 $total = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
 <td><?php echo $values["NameOfBook"]; ?></td>
 <td>Rs. <?php echo $values["SellingPrice"]; ?></td>
 <td><a href="cart1.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
 <td><a href="details.php?action=add&id=<?php echo $values["id"]; ?>">Details</a></td>


 </tr>
 <?php
 }
 }else{
	echo "<br><h3><center>Your cart is empty!</center></h3>";
	}
 ?>
 
 </table>
 </div>
 </div>
 </div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<form action="BookBasket.php">
<center><button name="exit" style="background:Green; color:white; font-size:18px; font-weight:bold; cursor: pointer; border:none; border-radius: 6px; padding:5px 5px">Continue Shopping</button></center>
</form>


<br /><br />
</div>

 <br />
 </body>
</html>