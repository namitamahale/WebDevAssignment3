<?php
 
session_start();
 
if(isset($_GET['logout'])){    
     
    //Simple exit message
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: chatsystem.php"); //Redirect the user
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error"><center>Please Enter Your Name</center></span>';
    }
}
 
function loginForm(){
    echo
    '<div id="loginform">
<a href="index.php" class="closebtn">&times;</a>

    <p>Please enter your name to continue.</p>
    <form action="chatsystem.php" method="post">
      <label for="name">Name :</label>
      <input type="text" name="name" id="name" />
      <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
  </div>
<br><br>';
echo '<center><div class="pa">A better way to communicate!!<br> Here you can discuss about specific book and details with different people.</center></div>';
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
 
        <title>Book Basket</title>
        
        <link rel="stylesheet" href="css/sc.css" />
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
                <p class="welcome">Welcome, <b><span style="color: Red"><?php echo $_SESSION['name']; ?></span></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>
 
            <div id="chatbox">
            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $contents = file_get_contents("log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="">
                <textarea rows="1" cols="50" Placeholder= "Type your message here...." style="overflow:hidden" name="usermsg" type="text" id="usermsg" /></textarea>
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" onclick="divide()"/>
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
                }
 
                setInterval (loadLog, 2500);
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to end the session?");
                    if (exit == true) {
                    window.location = "chatsystem.php?logout=true";
                    }
                });
            });
           
           

        </script>


    </body>
</html>
<?php
}
?>