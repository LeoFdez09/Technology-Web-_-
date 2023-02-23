<?php

$to = "contactodeleo@gmail.com"
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$cmessage = "mensaje envidado desde: " + $email + "\n" + $message;

mail($to, $subject, $cmessage);












?>