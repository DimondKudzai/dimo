<?php
$name= $_POST["name"];
$message= $_POST["message"];
$email= $_POST["email"];
$to = "diamondkudzai70@gmail.com";
$from = $email;
$subject ="comment about my website";
$body = "$messege";
if (mail($to, $subject, $body, "from: $from")) {
	echo "thank you $name,messege was sent";
} else{
	die('ERROR: mail delivery error');
}
?>