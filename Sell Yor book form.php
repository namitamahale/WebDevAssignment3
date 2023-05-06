<!DOCTYPE html>

<html>
<head>
<title>Book Basket</title>

<script>
function disable() {
  document.getElementById("ns").disabled=true;
}
function enable() {
  document.getElementById("ns").disabled=false;
}
</script>

<link rel="stylesheet" href="css/sf.css">

<script src="javascript/sa.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.submit').click(function(){
$(this).addClass("loader");
setTimeout(function(){
$('.btn').addClass("finished");
$('.btn').removeClass("loader");
},3500)
})
})
</script>

</head>

<body background="images/book3.jpg">
<a href="BookBasket.php"><button style="background-color: Blue; border: solid black 1px; color: white; padding: 10px 22px; margin: 4px 2px; cursor: pointer; text-decoration: none">Go To Home</button></a>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="insert.php"><button style="background-color: #4CAF50; border: solid black 1px; color: white; padding: 10px 22px; margin: 4px 2px; cursor: pointer; text-decoration: none">Display Books Entered</button></a>

<center>
<h1>Sell Your Book</h1>
</center>

<div class="container">
<form name="myform" action="add.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>About Book</legend>

<label for="nbook">Name of the book:</label>&nbsp
<input type="text" id="nbook" name="NameOfBook" placeholder="Enter the name of the book" required><br><br>

<label for="abook">Book author name:</label>&nbsp
<input type="text" id="abook" name="BookAuthorName" placeholder="Enter the name of the author" required><br><br>

<label for="des">Description of the book:</label><br>
<textarea id="des" name="DescriptionOfBook" placeholder="About the book" rows="10" cols="30" required></textarea><br><br>

<label for="npages">Number of pages:</label>&nbsp
<input type="text" id="npages" name="NumberOfPages" placeholder="Enter number of pages in the book" required><br><br>

<label for="edd">Eddition of the book:</label>&nbsp
<input type="text" id="edd" name="EdditionOfBook" placeholder="Enter eddition of the book"><br><br>

<label for="BindingOfBook">Binding of the book:</label>&nbsp
<input type="radio" id="bbind" name="BindingOfBook" value="Spiral" required>
<label for="BindingOfBook">Spiral</label>&nbsp&nbsp
<input type="radio" id="bbind" name="BindingOfBook" value="Normal">
<label for="BindingOfBook">Normal</label><br><br>

<label for="CoverOfBook">Cover of the book:</label>&nbsp
<input type="radio" id="softcover" name="CoverOfBook" value="Soft" required>
<label for="CoverOfBook">Soft</label>&nbsp&nbsp
<input type="radio" id="hardcover" name="CoverOfBook" value="Hard">
<label for="CoverOfBook">Hard</label><br><br>

<label for="Category">Category:</label>&nbsp
<select id="category" name="Category" required>
  <option value="Select">Select</option>
  <option value="Textbooks">Textbooks</option>
  <option value="Novel">Novel</option>
  <option value="Story books">Story books</option>
  <option value="Digest">Digest</option>
  <option value="Art & Music">Art & Music</option>
  <option value="Comics">Comics</option>
  <option value="Business">Business</option>
  <option value="Cooking">Cooking</option>
  <option value="Entertainment">Entertainment</option>
  <option value="Computer">Computer</option>
  <option value="Literature & Fiction">Literature & Fiction</option>
  <option value="Medical">Medical</option>
  <option value="Sports">Sports</option>
  <option value="Adventure">Adventure</option>
  <option value="Travel">Travel</option>
  <option value="Mysteries">Mysteries</option>
</select><br><br>

<label for="SuitableFor">Suitable for:</label>&nbsp
<input type="checkbox" id="suit" name="SuitableFor" value="Children"s>
<label for="SuitableFor">Children</label>&nbsp&nbsp
<input type="checkbox" id="suit" name="SuitableFor" value="Teen">
<label for="SuitableFor">Teen</label>&nbsp&nbsp
<input type="checkbox" id="suit" name="SuitableFor" value="Adult">
<label for="SuitableFor">Adult</label>&nbsp&nbsp
<input type="checkbox" id="suit" name="SuitableFor" value="All">
<label for="SuitableFor">All</label><br><br>

<label for="ActualPrice">Actual price of the book:</label>&nbsp
<input type="text" id="aprice" name="ActualPrice" required><br><br>

<label for="SellingPrice">Selling price of the book:</label>&nbsp
<input type="text" id="sprice" name="SellingPrice" required><br><br>

<label for="myfile">Images of the book:</label>&nbsp
<input type="file" id="myfile" name="myfile"><br>
</fieldset>
<br>
<fieldset>
<legend>Personal details</legend>
<label for="SName">Your Name:</label>&nbsp
<input type="text" id="pname" name="SName" placeholder="Enter your name" required><br><br>

<label for="SEId">Email ID:</label>&nbsp
<input type="email" id="emailid" name="SEId" placeholder="Enter your E-mail ID" required><br><br>

<label for="SPhoNo">Phone Number:</label>&nbsp
<input type="text" id="phno" name="SPhoNo" placeholder="Enter your phone number"><br><br>

<label for="SAdd">Address:</label><br>
<textarea id="SAdd" name="SAdd" rows="10" cols="30" placeholder="Your address" required></textarea><br><br>

<label for="BookStore">Do you have your own book store?:</label>&nbsp
<input type="radio" id="yesorno" name="BookStore" onclick="enable()" value="Yes">
<label for="BookStore">Yes</label>&nbsp&nbsp
<input type="radio" id="yesorno" name="BookStore" onclick="disable()" value="No">
<label for="BookStore">No</label><br><br>
<fieldset id="ns" name="ns">
<legend>Shop details</legend>

<label for="nshop">Name of the shop:</label>&nbsp
<input type="text" id="nshop" name="nshop" placeholder="Name of the shop"><br><br>


<label for="add2">Address:</label>
<input type="checkbox" id="check" name="check" value="Same as above" onchange="setAddress()">
<label for="check">Same as above</label><br><br>

<textarea id="add2" name="add2" rows="10" cols="30" placeholder="Your address"></textarea>

</fieldset>
</fieldset>
<br>
<p style="color:red; font-size:18px">*Note: Please note that once you click on submit your details will be stored. Once the book is ordered by customer the seller is requested to delete the book from the displayed table.</p>
 
<br>
<center><input type="submit" name="submit" id="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" name="reset" id="reset" value="Cancel"></center>

</form>
</div>
<br>


</body>
</html>