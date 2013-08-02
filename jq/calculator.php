<?php
if(isset($_POST['submit'])) {
$to = "smooney@cityofmillvalley.org";
$subject = "What are you thinking submission!";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$aspect = filter_var($_POST['aspect'], FILTER_SANITIZE_STRING);
$slope = filter_var($_POST['slope'], FILTER_SANITIZE_STRING);
$fuel_0_30 = filter_var($_POST['fuel_0_30'], FILTER_SANITIZE_STRING);
$fuel_30_100 = filter_var($_POST['fuel_0_30'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " address: $address\n\n 
		aspect: $aspect\n\n 
		slope: $slope\n\n
		Fuel: 0' - 30': $fuel_0_30\n\n
		Fuel: 30' - 100': $fuel_30_100\n\n ";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
header('Location: confirmation.html');
} else {
// handle the error somehow
}
?>