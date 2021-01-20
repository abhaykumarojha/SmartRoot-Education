<?php
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

$mailTo = "abhaykumarojha@gmail.com";
$headers = "Form: ". $phone;
$txt = "You have received an email from ". $firstname. $lastname. ".\n\n".$message;
mail($mailTo, $txt, $headers);
$msg = '<div class="alert" role="alert">Sent Successfully </div>';

?>