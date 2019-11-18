<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $n = $_POST['name'];
    $e = $_POST['email'];
    $m = $_POST['message'];
    $to = "bhargavv1245@gmail.com";
    $from = $n;
    $subject = "Contact form message";
    $message = '<b>Name:</b>' .$n. '<br><b>Email:</br>' .$e. '<p>' .$m. '</p>';
    $headers = "From: $from\n";
    $headers = "MIME-Version: 1.0\n";
    $headers = "Content-type: text/html; charset=iso-8859-1\n";
    if(mail($to, $subject, $message, $headers)){
        echo "Success";
    }else{
        echo "The server failed to send the message. Please try again later";
    }
}