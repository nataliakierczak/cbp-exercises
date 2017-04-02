<?php

require './class.phpmailer.php';
require './class.smtp.php';
require'./mail-config.php';

$mail=new PHPMailer();

$mail->SMTPDebug=3;

$mail->isSMTP();
$mail->Host=$config['server'];
$mail->SMTPAuth = true;                      // Enable SMTP authentication
$mail->Username = $config['username'];      // SMTP username
$mail->Password = $config['password'];     // SMTP password
$mail->SMTPAutoTLS = false;                // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                       // TCP port to connect to                                                       

$mail->setFrom('cbmailsmtp@seznam.cz', 'Natalia '); //company <address>
$mail->addReplyTo ('useremail@address.com'); //$_POST['email']; - email address of the user
$mail->addAddress('natalia.kierczak@gmail.com', 'Natalia Kierczak'); //adding address to whcih the email is sent, can be used for adding more recipients by copying the line and changing email and name 
$mail->Subject = 'New email';
$mail->Body = 'Test message';
if ($mail->send())
{
    echo 'sent';
}
else
{
    echo 'not sent';
};

