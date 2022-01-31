<?php

$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];


$email_form ='prashantkumar243243@gmail.com';

$email_subject ='New Form Submission';

$email_body= "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                "subject: $subject.\n".
                "user message: $message.\n";


                $to='prashantchoubey8338@gmail.com';

                $headers="From: $email_form \r\n";

                $headers .="Reply-To: $visitor_email \r\n";
                
                
                mail($to,$email_subject,$email_body,$headers);

                header("Location: contact.html");

?>