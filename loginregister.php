<!DOCTYPE html>
<html>
<head>
<title>Book Basket</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
margin:0;
padding:0;
font-family:sans-serif;
font-size:14px;
}


.login-form {
height:480px;
width:380px;
margin: 6% auto;
position:relative;
background:#f7f7f7;
padding: 5px;
overflow:hidden;
}
.login-form form {
margin-bottom: 15px;
background: #f7f7f7;
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
padding: 30px;

}
.login-form-h2 {
margin: 0 0 15px;
}
.form-control, .btn {
min-height: 38px;
border-radius: 2px;
}
.btn {
font-size: 15px;
font-weight: bold;
}


.hero{
height:100%;
width:100%;
background-position:center;
background-size:cover;
position:absolute;
 background-color:grey;

}
 
.form-box{
height:410px;
width:380px;
position:relative;
margin: 6% auto;
background:#fff;
padding: 5px;
overflow-x: hidden;
overflow-y: scroll;
}

.button-box{
width:220px;
position:relative;
margin: 35px auto;
border-radius: 30px;
color: Black;
background: LightBlue;
}

.toggle-btn{
padding: 10px 30px;
cursor: pointer;
background: transparent;
border: 0;
outline: none;
position:relative;
color: White;
font-weight: Bold;
}

#btn{
top: 0;
left: 0;
position: absolute;
width: 110px;
height: 100%;
background: #0000FF;
border-radius: 30px;
transition: .5s;
color: Black;
}

.input-group {
top: 130px;
position: absolute;
width: 280px;
transition:.5s;

}

.chech-box{
margin: 30px 10px 30px 0;
}

.p{
color: #777;
font-size: 12px;
bottom: 68px;
position:absolute;
}

#login{
height:250px;
left:50px;
overflow: hidden;
}

#register{
left:450px;
overflow-x: hidden;
overflow-y: scroll;
height:450px;
}

#pass_error{
color:red;
}
.closebtn {
  top: 10px;
  position: absolute;
  right: 370px;
  font-size: 40px;
  margin-left: 50px;
  color: white;
  font-weight: bold;
  text-decoration:none;
}

.closebtn:hover {
  position: absolute;
  background:none;
  right: 370px;
  font-size: 40px;
  color:Yellow;
  text-decoration: none;
  margin-left: 50px;
  top: 10px;
}
</style>
</head>

<body>

<div class="hero">
<a href="index.php" class="closebtn">&times;</a>

<div class="form-box">
<div class="button-box">
<div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()" >Login</button>
<button type="button" class="toggle-btn" onclick="register()" >Register</button>
</div>

<form id="login" class="input-group" method="POST" action="db1.php">
<label for="name">Username:</label><br>
<input type="text" class="form-control" name="user" placeholder="Enter Username" required> <br><br><br>

<label for="pass">Password:</label><br>
<input type="password" class="form-control" name="password" id="myInput" placeholder="Enter Password" required>
<br>
<label>
<input type="checkbox" class="chech-box" onclick="myFunction()" name="remember">&nbsp Show Password</label>
<br><br>
<button type="submit"  class="btn btn-primary btn-block">Login</button>
<br>
<div class="register-now">
<label>New member? <span style="color: red"> Please Register.</span></div></label>

</form>




<form id="register" class="input-group" action="db.php" method="POST">
<label for="name">Username:</label><br>
<input type="text" name="user" class="form-control" placeholder="Enter Username" required> <br><br><br>
<label for="name">Email-id:</label><br>
<input type="email" name="email" class="form-control" placeholder="Enter Email address" required> <br><br><br>
<label for="pass">Password:</label><br>
<input type="password" class="form-control" name="password" id="txtNewPassword" placeholder="Enter Password" required> 
<br><br><br>
<label for="pass-repeat">Confirm Password:</label><br>
<input type="password" class="form-control" name="password2"  id="txtConfirmPassword" placeholder="Repeat Password" required> 
<label>
<input type="checkbox" class="chech-box" onclick="myFunctionp()" name="remember">&nbsp Show Password</label><br>
<div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div>
<br>

<button type="submit" id="btnSubmit" name="submit" value="Submit" class="btn btn-primary btn-block">Register</button>
<br>
<div class="register-now">
<label>Already have an account? <span style="color: red"> Please Login.</span></div></label>
<br>
</form>
</div>
</div>

<script>
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register(){
x.style.left ="-400px";
y.style.left ="50px";
z.style.left ="110px";
}


function login(){
x.style.left ="50px";
y.style.left ="450px";
z.style.left ="0px";
}

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunctionp() {
  var x = document.getElementById("txtNewPassword");
  var y = document.getElementById("txtConfirmPassword");
 
  if (x.type === "password"){
    x.type = "text";
   
  } else {
    x.type = "password";
    
  }

 if (y.type === "password"){
  y.type = "text";
  } else {
    y.type = "password";
  }


}



function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });


</script>

</body>
</html>
