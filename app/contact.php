<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_forename = "";
    $visitor_email = "";
    $visitor_message = "";
     
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_forename'])) {
        $visitor_name = filter_var($_POST['visitor_forename'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
    $recipient = "alexandre.techer@protonmail.com";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Merci pour votre message, $visitor_name.</p>";
    } else {
        echo '<p>Désolé, cet email n\'est pas valide</p>';
    }
     
} else {
    echo '<p>Un problème quelque part !</p>';
}