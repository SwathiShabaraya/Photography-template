<?php

//change the details according to your requirements
  use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '..\vendor\phpmailer\phpmailer\src\Exception.php';
require '..\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require '..\vendor\phpmailer\phpmailer\src\SMTP.php';
  $receiving_email_address = 'example@gmail.com';

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Mailer = "smtp";

  $mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 2525;
$mail->Host       = "smtp.elasticemail.com";
$mail->Username   = "example@gmail.com";
$mail->Password   = "password";


$mail->IsHTML(true);
$mail->AddAddress("example@gmail.com", "recipient-name");
$mail->SetFrom("example@gmail.com", "from-name");

$mail->Subject = $_POST['subject'];
$content = $_POST['message'];


$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>