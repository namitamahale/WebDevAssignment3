<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `book` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Basket</title>
<link rel="stylesheet" href="css/sf.css">
</head>
<body background="images/book3.jpg">
	<center><h1>Edit Book Details</h1></center>

<div class="container">
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
<fieldset>
<legend>About Book</legend>

		<label for="nbook">Name of the book:</label>&nbsp
<input type="text" id="nbook" name="NameOfBook" value="<?php echo $row['NameOfBook']; ?>" placeholder="Enter the name of the book" required><br><br>

<label for="abook">Book author name:</label>&nbsp
<input type="text" id="abook" name="BookAuthorName" value="<?php echo $row['BookAuthorName']; ?>" placeholder="Enter the name of the author" required><br><br>

<label for="des">Description of the book:</label><br>
<textarea id="des" name="DescriptionOfBook" placeholder="About the book" rows="10" cols="30" required><?php echo $row['DescriptionOfBook'] ?></textarea><br><br>

<label for="npages">Number of pages:</label>&nbsp
<input type="text" id="npages" name="NumberOfPages" value="<?php echo $row['NumberOfPages']; ?>" placeholder="Enter number of pages in the book" required><br><br>

<label for="edd">Eddition of the book:</label>&nbsp
<input type="text" id="edd" name="EdditionOfBook" value="<?php echo $row['EdditionOfBook']; ?>" placeholder="Enter eddition of the book"><br><br>

<label for="BindingOfBook">Binding of the book:</label>&nbsp
<input type="radio" id="bbind" name="BindingOfBook" value="Spiral" <?php if($row['BindingOfBook']=="Spiral"){echo "checked";}?> required>
<label for="BindingOfBook">Spiral</label>&nbsp&nbsp
<input type="radio" id="bbind" name="BindingOfBook" value="Normal" <?php if($row['BindingOfBook']=="Normal"){echo "checked";}?> >
<label for="BindingOfBook">Normal</label><br><br>

<label for="CoverOfBook">Cover of the book:</label>&nbsp
<input type="radio" id="softcover" name="CoverOfBook" value="Soft" <?php if($row['CoverOfBook']=="Soft"){echo "checked";}?> required>
<label for="CoverOfBook">Soft</label>&nbsp&nbsp
<input type="radio" id="hardcover" name="CoverOfBook" value="Hard" <?php if($row['CoverOfBook']=="Hard"){echo "checked";}?>>
<label for="CoverOfBook">Hard</label><br><br>
	
<label for="Category">Category:</label>&nbsp
<select id="category" name="Category" required>
  <option <?php if($row['Category']=="Select"){echo "selected";}?>>Select</option>
  <option <?php if($row['Category']=="Textbooks"){echo "selected";}?>>Textbooks</option>
  <option <?php if($row['Category']=="Novel"){echo "selected";}?>>Novel</option>
  <option <?php if($row['Category']=="Story books"){echo "selected";}?>>Story books</option>
  <option <?php if($row['Category']=="Digest"){echo "selected";}?>>Digest</option>
</select><br><br>

<label for="SuitableFor">Suitable for:</label>&nbsp

<?php 
					$SuitableFor=$row['SuitableFor'];
					$arr=explode(",",$SuitableFor);
					
					?>
				
<input <?php if(in_array("Children",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="Children"/>
<label for="SuitableFor">Children</label>&nbsp&nbsp
<input <?php if(in_array("Teen",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="Teen"/>
<label for="SuitableFor">Teen</label>&nbsp&nbsp
<input <?php if(in_array("Adult",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="Adult"/>
<label for="SuitableFor">Adult</label>&nbsp&nbsp
<input <?php if(in_array("All",$arr)){echo "checked";}?> type="checkbox" name="arr[]" value="All"/>
<label for="SuitableFor">All</label><br><br>

<label for="ActualPrice">Actual price of the book:</label>&nbsp
<input type="text" id="aprice" name="ActualPrice" value="<?php echo $row['ActualPrice']; ?>" required><br><br>

<label for="SellingPrice">Selling price of the book:</label>&nbsp
<input type="text" id="sprice" name="SellingPrice" value="<?php echo $row['SellingPrice']; ?>" required><br><br>
</fieldset>
<br>
<fieldset>
<legend>Personal details</legend>

<label for="SName">Your Name:</label>&nbsp
<input type="text" id="pname" name="SName" placeholder="Enter your name" value="<?php echo $row['SName']; ?>" required><br><br>

<label for="SEId">Email ID:</label>&nbsp
<input type="email" id="emailid" name="SEId" placeholder="Enter your E-mail ID" value="<?php echo $row['SEId']; ?>" required><br><br>

<label for="SPhoNo">Phone Number:</label>&nbsp
<input type="text" id="phno" name="SPhoNo" placeholder="Enter your phone number" value="<?php echo $row['SPhoNo']; ?>"><br><br>

<label for="SAdd">Address:</label><br>
<textarea id="SAdd" name="SAdd" rows="10" cols="30" placeholder="Your address" required><?php echo $row['SAdd'] ?></textarea><br><br>

<label for="BookStore">Do you have your own book store?:</label>&nbsp
<input type="radio" id="yesorno" name="BookStore" <?php if($row['BookStore']=="Yes"){echo "checked";}?> onclick="enable()" value="Yes">
<label for="BookStore">Yes</label>&nbsp&nbsp
<input type="radio" id="yesorno" name="BookStore" <?php if($row['BookStore']=="No"){echo "checked";}?> onclick="disable()" value="No">
<label for="BookStore">No</label><br><br>
</fieldset>

	<center><input type="submit" name="edit"></center>
		<a href="Sell Yor book form.php">Back</a>
	</form>
</body>
</html>