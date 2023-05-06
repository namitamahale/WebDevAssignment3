<?php
	include('conns.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `addvertise` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Basket</title>
<link rel="stylesheet" href="css/sf.css">
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

</style>
</head>

<body background="images/bg5.jpg">
<h1> Edit Your Advertise </h1>

<div class="container">
<div class="left">

<form method="POST" enctype="multipart/form-data" action="updateadd.php?id=<?php echo $id; ?>">

<fieldset>
<legend>Personal Details</legend>
<label for="name">Name: </label><br>
<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Please Enter Your Name...." required>
<br><br>
<label for="PAddress">Personal Address: </label><br>
<textarea id="PAddress" rows="10" cols="30" name="PAddress" class="form-control" placeholder="Your Address...." required><?php echo $row['PAddress']; ?></textarea>
<br><br>
<label for="Phno">Phone Number: </label><br>
<input type="text" id="Phno" name="Phno" value="<?php echo $row['Phno']; ?>" class="form-control" placeholder="Phone Number...." required>
<br><br>
<label for="Emailid">Email-Id: </label><br>
<input type="text" id="Emailid" name="Emailid" value="<?php echo $row['Emailid']; ?>" class="form-control" placeholder="Email Id....">
</fieldset>
</div>

<div class="right">
<fieldset>
<legend>Advertise Print</legend>
<label for="AddvertiseOnWhat">Addvertise on what: </label><br>
<input type="radio" id="coaching" name="AddvertiseOnWhat" value="Coaching" <?php if($row['AddvertiseOnWhat']=="Coaching"){echo "checked";}?> required>
<label for="AddvertiseOnWhat">Coaching</label>&nbsp&nbsp
<input type="radio" id="school" name="AddvertiseOnWhat" value="School" <?php if($row['AddvertiseOnWhat']=="School"){echo "checked";}?>> 
<label for="AddvertiseOnWhat">School</label>&nbsp&nbsp
<input type="radio" id="college" name="AddvertiseOnWhat" value="College" <?php if($row['AddvertiseOnWhat']=="College"){echo "checked";}?>>
<label for="AddvertiseOnWhat">College</label>&nbsp&nbsp
<input type="radio" id="courses" name="AddvertiseOnWhat" value="Courses" <?php if($row['AddvertiseOnWhat']=="Courses"){echo "checked";}?>>
<label for="AddvertiseOnWhat">Courses</label>&nbsp&nbsp
<br><br>

<label for="title">Title (The topic for your addvertise) : </label><br>
<input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" class="form-control" placeholder="Enter the title...." required>
<br><br>
<label for="body">Body (The content for addvertisment) : </label><br>
<textarea id="body" name="body" rows="10" cols="30" class="form-control" placeholder="Advertisment body...." required><?php echo $row['body']; ?></textarea>
<br><br>
<label for="Location">Location: </label><br>
<textarea id="Location" name="Location" rows="10" cols="30" class="form-control" placeholder="Location...." required><?php echo $row['Location']; ?></textarea>
<br><br>
<label for="contact">Contact No: </label><br>
<input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" class="form-control" placeholder="Enter contact no...." required>
<br><br>
<label for="AddEmailid">Email-Id: </label><br>
<input type="text" id="AddEmailid" name="AddEmailid" value="<?php echo $row['AddEmailid']; ?>" class="form-control" placeholder="Enter Email Id....">
</fieldset>
</div>

<br><br>


<center><input type="submit" name="submit" id="submit" value="Submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" name="reset" id="reset" value="Cancel">
</form>
</div>

</body>
</html>





