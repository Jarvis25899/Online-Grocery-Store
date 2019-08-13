<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
$email=$_POST['email'];
if(isset($_POST['email'])){

require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'testwork612@gmail.com'; // your email id
$mail->Password = 'test@5111998'; // your password
$mail->SMTPSecure = 'tls';                  
$mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
$mail->setFrom('sendfrom@gmail.com', 'Name');
$mail->addAddress($email);   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h2>You are Succesfully suscribed for store website</h2>';
$mail->Subject = 'Signup For Newsletter';
$mail->Body    = $bodyContent;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
}