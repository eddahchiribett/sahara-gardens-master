<?php
include('../includes('connection.php')');


$message = $_POST['message'];
$email = $_POST['email'];


  $to = $email;
 $subject = "Reply for Hotel reservation at SAHARA HOTEL";
 $txt = $message;
 $headers = "From:SAHARA HOTEL "" \r\n";

 $send_mail = mail($to,$subject,$txt,$headers);
 if (!$send_mail) {
   echo "Failed to send the email";
 }else{
   header("location:index.php?msg=1");
 }

 ?>
