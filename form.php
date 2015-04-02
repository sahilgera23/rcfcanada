<?php
if( isset($_POST))
{
$email = $_POST['email'];
$name = $_POST['name'];

$message = $_POST['message']; 

$to = "sahil.gera5@gmail.com";
$subject = "Contact Form Submission";
$text = "Someone just filled out the contact form!\n
         Name : $name \n
         Email : $email \n
         Message : $message \n"; 
		 
$h = mail($to , $subject, $text); 

}

?>