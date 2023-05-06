<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     date_default_timezone_set('Asia/Kolkata');
    $text_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b>" .stripslashes(htmlspecialchars($text))."<br><br> <span class='chat-time'>".$date = date('d/m/Y h:i:s a', time())."</span></div>";
     $text_message = nl2br($text_message);
    file_put_contents("log1.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>