<!DOCTYPE html>
<html>
<head>
<title>Book Basket</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
padding: 10px;
margin: 10px;
background-repeat: no-repeat;
background-size: cover;
}

.container {
background: white;
width: 80%;
height: 100%;
padding: 30px;
}

.container .right {
background: white;
float: right;
width: 50%;
height: 100%;
padding: 30px;
}

.container .left {
background: white;
float: left;
width: 50%;
height: 100%;
padding: 30px;
}

h1 {
text-align: center;
font-weight: bold;
}

#submit {
background:Green;
width:100px;
height:30px;
color:white;
border:none;
border-radius: 10%;
}

#submit:hover {
opacity:.7;
}

#reset {
background:Red;
width:100px;
height:30px;
color:white;
border:none;
border-radius: 10%;
}

#reset:hover {
opacity:.7;
}

#home {
background:Blue;
width:100px;
height:30px;
color:white;
border:none;
border-radius: 10%;
}

#reset:hover {
opacity:.7;
}

.display {
width: 100px;
height: 40px;
background: Orange;
color: white;
font-weight: bold;
}

.display:hover {
opacity:.8;
}

</style>
</head>

<body background="images/bg5.jpg">


<h1> Advertise Your Profession </h1>
<br>
<form action="displayalladd.php">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<input type="submit" name="submit" class="display" value="Display Ads">
</form>

<br>
<div class="container">
<div class="left">

<form name="myform" action="addadd.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Personal Details</legend>

<label for="name">Name: </label><br>
<input type="text" id="name" name="name" class="form-control" placeholder="Please Enter Your Name...." required>
<br><br>
<label for="PAddress">Personal Address: </label><br>
<textarea id="PAddress" rows="10" cols="30" name="PAddress" class="form-control" placeholder="Your Address...." required></textarea>
<br><br>
<label for="Phno">Phone Number: </label><br>
<input type="text" id="Phno" name="Phno" class="form-control" placeholder="Phone Number...." required>
<br><br>
<label for="Emailid">Email-Id: </label><br>
<input type="text" id="Emailid" name="Emailid" class="form-control" placeholder="Email Id....">
</fieldset>
</div>

<div class="right">
<fieldset>
<legend>Advertise Print</legend>
<label for="AdvertiseOnWhat">Advertise on what: </label><br>
<input type="radio" id="coaching" name="AddvertiseOnWhat" value="Coaching" required>
<label for="AddvertiseOnWhat">Coaching</label>&nbsp&nbsp
<input type="radio" id="school" name="AddvertiseOnWhat" value="School">
<label for="AddvertiseOnWhat">School</label>&nbsp&nbsp
<input type="radio" id="college" name="AddvertiseOnWhat" value="College">
<label for="AddvertiseOnWhat">College</label>&nbsp&nbsp
<input type="radio" id="courses" name="AddvertiseOnWhat" value="Courses">
<label for="AddvertiseOnWhat">Courses</label>&nbsp&nbsp
<br><br>

<label for="title">Title (The topic for your advertise) : </label><br>
<input type="text" id="title" name="title" class="form-control" placeholder="Enter the title...." required>
<br><br>
<label for="body">Body (The content for advertisment) : </label><br>
<textarea id="body" name="body" rows="10" cols="30" class="form-control" placeholder="Advertisment body...." required></textarea>
<br><br>
<label for="Location">Location: </label><br>
<textarea id="Location" name="Location" rows="10" cols="30" class="form-control" placeholder="Location...." required></textarea>
<br><br>
<label for="Phno">Contact No: </label><br>
<input type="text" id="contact" name="contact" class="form-control" placeholder="Enter contact no...." required>
<br><br>
<label for="Emailid">Email-Id: </label><br>
<input type="text" id="AddEmailid" name="AddEmailid" class="form-control" placeholder="Enter Email Id...." required>
<br><br>
<label for="myfile">Images for add:</label>&nbsp
<input type="file" id="myfile" name="myfile" required><br>
</fieldset>
<br><br><br>

<center><input type="submit" name="submit" id="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" name="reset" id="reset" value="Cancel">
</form>
</div>

</div>
<br><br>
<form action="bookbasket.php">
<center><input type="submit" name="submit" id="home" value="Home"></center>
</form>


