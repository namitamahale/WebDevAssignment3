<?php
 
session_start();
 
if(isset($_GET['logout'])){    
     
    //Simple exit message
    file_put_contents("log1.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: index1.php"); //Redirect the user
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<br><span class="error"><center>Please Enter Your Name.</center></span>';
    }
}
 
function loginForm(){
    echo
    '<br>
<a href="index.php" class="closebtn">&times;</a><br><br><br> 
  
<center><h2> TALENT SHOWCASE </h2></center>
<br>
<div id="loginform">
    <img src="images/bbg1.png" style="width:100%">
    <form action="index1.php" method="post">
      <label for="name">Name : </label>&nbsp
      <input type="text" name="name" id="name" /> 
      &nbsp&nbsp
    <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
  </div>
<br><br>';
echo '<center><div class="pa">Looking for a platform to showcase your talent??<br> Show your talent in the form of Riddles, Stories, Poetry and Thoughts</center></div>';
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
 
        <title>Book Basket</title>
        
        <link rel="stylesheet" href="css/tscss.css" />
    </head>
    <body>
    <?php
    if(!isset($_SESSION['name'])){
        loginForm();
    }
    else {
    ?>
        <div id="wrapper">
            <div id="menu">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <p class="welcome"><center><b><span style="font-size: 15px">Talent Showcase</span></b></center></p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>
<div id="bg">
            <div id="chatbox">

            <?php
            if(file_exists("log1.html") && filesize("log1.html") > 0){
                $contents = file_get_contents("log1.html");          
                echo $contents;
            }
            ?>
</div>
            </div>

            <form name="message" action="">
                <textarea rows="1" cols="50" Placeholder= "Type your message here...." style="overflow:hidden" name="usermsg" type="text" id="usermsg" /></textarea>
                &nbsp&nbsp&nbsp<input name="submitmsg" type="submit" id="submitmsg" value="POST" onclick="divide()"/>
            </form>
        </div>
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
                    $.post("post1.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                   }
                 });
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
 
                    $.ajax({
                        url: "log1.html",
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
                }
 
                setInterval (loadLog, 2500);
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to end the session?");
                    if (exit == true) {
                    window.location = "index1.php?logout=true";
                    }
                });
            });
           
           

        </script>
    </body>
</html>
<?php
}
?>