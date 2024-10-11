<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@pugliaontheroad.net';
$email_subject = 'Sottomissione di un nuovo form';
$email_body = "Nome Utente: $name.\n".
              "Email Utente: $visitor_email.\n".
              "Oggetto Email: $subject.\n".
              "Messaggio Utente: $message.\n";

$to = 'pugliaroad.info@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header ("Location: contatti.html");










 ?>
