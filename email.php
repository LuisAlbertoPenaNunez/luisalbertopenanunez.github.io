<?php

if (isset($_REQUEST['name'],$_REQUEST['subject'],$_REQUEST['email'],$_REQUEST['message'])) {
      
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
      
    // Receiver email address

    $to = 'receiver_email@domain.com';
      
    $header = "From: ".$name." <".$email."> \r\n";
    $header .= "Reply-To:  ".$name." <".$email."> \r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
      
    $send_email = mail($to,$subject,$message,$header);
      
    echo ($send_email) ? 'success' : 'error';
      
}

?>