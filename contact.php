<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'suto1208@gmail.com';

$email_subject = "VOIFILMのWEBサイトから新しいメッセージ";

$email_body = "Name: $name.\n".
"Email: $email.\n".
"Message: $message.\n";

$email_to = "suto1208@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply To: $email \r\n";

mail($email_to,$email_subject,$email_body,$headers);

header("Location: Website Name");

?>