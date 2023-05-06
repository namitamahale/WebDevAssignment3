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
<link rel="stylesheet" href="css/ms.css">
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
}



/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 250px;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 960px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: LightGrey;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.70%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.9;
}

.active,
.demo:hover {
  opacity: 1;
}

.container {
width: 100%;
height: 100%;
background:#e6e6ff;
margin: auto;
}

.container .left {
width: 30%;
height: auto;
background-color: none;
float: left;
}

.container .right {
width: 70%;
height: 100%;
background-color: none;
float: right;
}

/*ratings*/
section{
width: 620px;
height: auto;
position: relative;
direction: rtl;
text-align: left;
}

.input{
display:none;
}

.label{
display: inline-block;
width: 20px;
height: 20px;
background: LightGrey;
clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
}

.label:hover,
label:hover ~ label,
input:checked ~ label{
background: gold;
cursor: pointer;
}

/*Price*/
.price {
background: none repeat scroll 0 0 #F7F7F7;
color: #383838;
font-size: 24px;
font-weight: bold;
line-height: 16px;
margin: 17px 0 10px;
padding: 6px 0 6px 8px;
}

.usual {
color: #7F7F7F;
font-size: 18px;
font-weight: normal;
line-height: 16px;
padding-right: 6px;
text-decoration: line-through;
background: #e6e6ff;
}

.special {
color: #FD7A01;    
font-weight: bold;
text-decoration: none;
background: #e6e6ff;
}

/*price for down*/
.priced {
background: #e6e6ff;
color: #383838;
font-size: 14px;
font-weight: bold;
line-height: 10px;
margin: 10px 0 5px;
padding: 6px 0 6px 0;
text-align: left;
}

.usuald {
color: #7F7F7F;
font-size: 14px;
font-weight: normal;
line-height: 10px;
padding-right: 6px;
text-decoration: line-through;
text-align: left;
background: #e6e6ff;
}

.speciald {
color: #FD7A01;    
font-weight: bold;
text-decoration: none;
background: #e6e6ff;
}

div.descd {
height:100px;
width: 100px;
padding-top: 15px;
padding-left: 0;
padding-right: 0;
margin: 0; 
text-align: left;
width: 200px;
}

/*toggle button*/
.hero{
width: 0;
height: auto;
}

.form-box{
width: 510px;
height: 320px;
position: relative;
margin: 6% auto;
padding: 0;
background: #e6e6ff;
overflow: hidden;
}

.button-box{
width: 510px;
position: relative;

}

.toggle-btn{
padding: 10px 90px;
cursor: pointer;
background: transparent;
border: 0;
outline: none;
position: relative;
}

.input-group{
top: 50px;
padding: 2px;
position: absolute;
width: 480px;
transition: .5s;
}

.input-field{
width: 100%;
padding: 10px 0;
margin: 5px 0;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid grey;
outline: none;
}

#btn{
top: 0;
left: 0;
position: absolute;
width: 236px;
height: 100%;
background: LightGrey;
transition: .5s;
}
 
#details{
left: 10px;
}

#description{
left: 550px;
}

.button1{
height: 40px;
width: 280px;
background: OrangeRed;
color: White;
font-size: 18px;
font-weight: bold;
border: none;
}

.button2{
height: 40px;
width: 300px;
background: #00b300;
color: White;
font-size: 18px;
font-weight: bold;
border: none;
margin:20px;
}

.button3{
height: 40px;
width: 200px;
background: #cc66ff;
color: White;
font-size: 18px;
font-weight: bold;
border: none;
margin:20px;
}

/*down part*/
div.gallery {
margin-left:30px;
margin-right:24px;
margin-bottom:30px;
margin-top:15px;
float: left;
border: 1px solid black;
width: 130px;
height: 150px;
}

div.gallery img {
width: 130px;
height: 150px;
}


div.gallery:hover {
width: 130px;
height: 150px;
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
padding: 0;
margin-bottom:5px;
margin-top:5px;
height: 350px;
border: none;
}

a {
text-decoration: none;
}

</style>
</head>

<body style="background: #e6e6ff;">
<div class="container">
<div class="left">

<?php
	$id=$_GET['id'];
	$querydisplay=mysqli_query($conn,"select * from `book` where id='$id'");
	$result=mysqli_fetch_array($querydisplay);
?>

<br><br>
<br><br><br>
<p>&nbsp&nbsp&nbsp&nbsp<img src=" <?php echo $result['BookImage']; ?>" height="50%" width="50%"> </p>
</div>

<div class="right">
<br><br><br><br>

<h1><strong><?php echo $result['NameOfBook']; ?></strong></h1>
<p><span style="color: blue; font-size: 16px; font-weight: bold">Author: </span><?php echo $result['BookAuthorName']; ?></p>
<br>
<i style="color: red; font-size:24px" class="fa">&#xf041;</i>
<span style="color: DarkGrey; font-size: 18"><?php echo $result['SAdd']; ?></span>
<div class="price" style="background: #e6e6ff;">
    <span class="usual">Rs.<?php echo $result['ActualPrice']; ?></span>                            
     <span class="special">Rs.<?php echo $result['SellingPrice']; ?></span>
</div>
<br><br><br>
*&nbsp<i style="font-size:24px" class="fa">&#xf0d1;</i> &nbsp No Return policy&nbsp&nbsp&nbsp&nbsp&nbsp
*&nbsp<i style="font-size:24px" class="fa">&#xf01e;</i> &nbsp No Exchange&nbsp&nbsp&nbsp&nbsp&nbsp
*&nbsp<i style="font-size:24px" class="fa">&#xf156;</i> &nbsp Cash in hand&nbsp&nbsp&nbsp&nbsp&nbsp
*&nbsp<i style="font-size:24px" class="fa">&#xf570;</i> &nbsp No GST invoice available 


<div class="hero">
<br><br><br>
<div class="form-box">
<div class="button-box">
<div id="btn"></div>
<button type="button" class="toggle-btn" onclick="details()"><b>Highlights</b></span></button>
<button type="button" class="toggle-btn" onclick="description()"><b>Description</b></button>
</div>




<div id="details" class="input-group" class="input-field">
<h4>Product details</h1>
<p>Author Name:<?php echo $result['BookAuthorName']; ?> <br>
Number Of Pages: <?php echo $result['NumberOfPages']; ?><br>
Eddition Of Book: <?php echo $result['EdditionOfBook']; ?><br>
Binding Of Book: <?php echo $result['BindingOfBook']; ?><br>
Cover Of Book: <?php echo $result['CoverOfBook']; ?><br>
Category:<?php echo $result['Category']; ?><br>
Suitable For:<?php echo $result['SuitableFor']; ?><br>
</p>

</div>



<div id="description" class="input-group" class="input-field">
<?php echo $result['DescriptionOfBook']; ?>
</div>

</div>

</div>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --!>
<button type="button" class="button2" data-toggle="modal" data-target="#myModal">Buy Now &nbsp&nbsp<i style="font-size:24px; color: white" class="fa">&#xf04b;</i><br></button></center>

<a style="text-decoration: none; color: white" href="BookBasket.php">
<button type="button" class="button1">Home &nbsp&nbsp<i style="font-size:24px; color: white" class="fa">&#xf015;</i><br></button></a></center>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Contact Details</h2>
        </div>
        <div class="modal-body">
          <h5 style="color:red">Pease Contact on bellow mentioned details:</h5>
          <hr>
          <p>Seller Name: <?php echo $result['SName']; ?></p>
          <p>Seller Email-Id: <?php echo $result['SEId']; ?></p>
          <p>Seller Phone No.: <?php echo $result['SPhoNo']; ?></p> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
<button type="button" class="button3" data-toggle="modal" data-target="#myModal1">Confirm Order<br></button></center>

 </div>
      </div>
      
    </div>



  </div>
  
</div>

        </div>


 <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Enter Your Email-Id</h3>
        </div>
        <div class="modal-body">

<?php
                    //first we leave this input field blank
                    $recipient = "";
                    //if user click the send button
                    if(isset($_POST['send'])){
                        //access user entered data
                       $recipient = $_POST['email'];
                       $subject = $_POST['subject'];
                       $message = $_POST['message'];
                       $sender = "From: bookbasket2021@gmail.com";
                       //if user leave empty field among one of them
                       if(empty($recipient) || empty($subject) || empty($message)){
                           ?>
                           <!-- display an alert message if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
                           <?php
                        }else{
                            // PHP function to send mail
                           if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your mail successfully sent to $recipient"?>
                            </div>
                           <?php
                           $recipient = "";
                           }else{
                            ?>
                            <!-- display an alert message if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
                           <?php
                           }
                       }
                    }
                ?> <!-- end of php code -->


         <form method="POST">
                    <div class="form-group">
<input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                    </div>
                        
                  
                    <div class="form-group" hidden>
                        <input class="form-control" name="subject" type="text" placeholder="Subject" value="Order Confirm">
                    </div>
                    <div class="form-group" hidden>
                        <textarea cols="30" rows="5" class="form-control textarea" name="message">The order is placed for Bookcode:- <?php echo $result['id']; ?> and Name:- <?php echo $result['NameOfBook']; ?> of Price:- <?php echo $result['SellingPrice']; ?>.
Please collect your order from seller within 5 days. Make sure that the seller can re-sell the book if the customer fails to collect the book within the time period. 
Your Seller Details are: Name: <?php echo $result['SName']; ?> and Email-id: <?php echo $result['SEId']; ?>.
Thank You for shopping with Book Basket. </textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send" data-toggle="modal" data-target="#myModal2">
                    </div>

                </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


 </div>
      </div>
      
    </div>



  </div>
  
</div>

        </div>



 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Order Confirmation</h2>
        </div>
        <div class="modal-body">
<br>
<p>Please click on confirm button</p>
<br>
<?php
                    //first we leave this input field blank
                    $recipient = "";
                    //if user click the send button
                    if(isset($_POST['send'])){
                        //access user entered data
                       $recipient = $_POST['SEId'];
                       $subject = $_POST['subject'];
                       $message = $_POST['message'];
                       $sender = "From: bookbasket2021@gmail.com";
                       //if user leave empty field among one of them
                       if(empty($recipient) || empty($subject) || empty($message)){
                           ?>
                           <!-- display an alert message if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
                           <?php
                        }else{
                            // PHP function to send mail
                           if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your mail successfully sent to $recipient"?>
                            </div>
                           <?php
                           $recipient = "";
                           }else{
                            ?>
                            <!-- display an alert message if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
                           <?php
                           }
                       }
                    }
                ?> <!-- end of php code -->


         <form method="POST">
                    <div class="form-group" hidden>
                        <input class="form-control" name="SEId" type="email" placeholder="Recipients" value="<?php echo $result['SEId']; ?>">
                    </div>
                  
                    <div class="form-group" hidden>
                        <input class="form-control" name="subject" type="text" placeholder="Subject" value="Order Confirm">
                    </div>
                    <div class="form-group" hidden>
                        <textarea cols="30" rows="5" class="form-control textarea" name="message">The order for Bookcode:- <?php echo $result['id']; ?> and Name:- <?php echo $result['NameOfBook']; ?> of Price:- <?php echo $result['SellingPrice']; ?> is placed.
The seller has right to re-sell the book if customer is not buying the book for any reason. Now since your order is placed, you are requested to delete the book before anyone else buy's the book. If in case you have more copy of same than you are most welcome to keep it as it is.
Thank you!!</textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Confirm">
                    </div>

                </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


 </div>
      </div>
      
    </div>



  </div>
  
</div>

        </div>

   
</div>

</div>        
</div>
</div>
 <br><br>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = document.getElementById('usermsg').value;
                    if (clientmsg === ''){
                    alert("Enter text");
                  }
                   else{
                    $("#usermsg").val();
                    $.post("post.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                   }
                 });
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
 
                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function (html) {
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div
 
                            //Auto-scroll           
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }   
                        }
                    });
                });
             });
           
           

        </script>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
 
<script>
var x = document.getElementById("details");
var y = document.getElementById("description");
var z = document.getElementById("btn");

function description(){
x.style.left = "-400px";
y.style.left = "10px";
z.style.left = "280px";
}

function details(){
x.style.left = "10px";
y.style.left = "550px";
z.style.left = "0";
}
</script>


</body>
</html>