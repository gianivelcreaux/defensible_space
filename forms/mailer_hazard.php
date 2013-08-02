<?php
if(isset($_POST['submit'])) {
// BE SURE TO CHANGE THE EMAIL ADDRESS HERE IN THE CONSTANTS.PHP FILE
include('../constants.php');  
$to = $fire_email;
$subject = "Hazard Assessment Request";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$date = date("Y/m/d");
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
//constructing the message
// THIS IS THE MESSAGE THAT WILL BE SENT FROM THE FORM
$body = "From: $name_field\n\n 
		E-Mail: $email_field\n\n 
		Phone: $phone\n\n
		Date: $date\n\n
		Address: $address\n\n 
		This is the Message. You can say what you want here.";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
header('Location: confirmation_hazard.php');
} else {
// handle the error somehow
}
?>