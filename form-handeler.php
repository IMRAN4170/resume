<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form ='domain name in mail';

$email_subject = 'new for submission';


$email_body = "user name: $name.\n".
              "user email:$visitor_email.\n".
              "subject:$subject.\n".
              "user message:$message .\n";



$to = "sayyadimran96655@gmail.com"              

$headers = "Form: $email_form \r\n";


$headers = "Replay-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers)

headers("Location: contact.html");







?>