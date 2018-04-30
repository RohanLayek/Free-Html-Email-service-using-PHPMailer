<?php

$email=$_POST['email'];
$htmlmessage=$_POST['htmlmessage'];

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->Host = 'smtp.gmail.com';    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '####Your Email here';     // SMTP username
$mail->Password = '#####Your password';                   // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('###domain@domain.com','##domain');
$mail->addAddress($email);                          // Your dinamic email address
$mail->addReplyTo('###noreplay@domain.com', 'info');
$mail->isHTML(true);                               // Set email format to HTML
$mail->Subject = '###Subject';
$mail->Body    = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="margin: 0;padding: 0;background-color: #20f89e;overflow: hidden;">
<div class="container" align="center">
<div class="col-sm-12" style="margin: 0;padding: 4px;background-color: #83fbc9;">
  <p style="font-weight: bolder;" >'.$htmlmessage.'</p>

</div>
  <div class="col-sm-12" style="background-color: #03633b">
    <p style="font-weight: bolder;font-size: 20px;color: white;">Created By: Monowar Iqbal Layek</p>
    <p style="font-weight: bolder;color: white;">GitHub link-> <a href="https://github.com/RohanLayek/Free-Html-Email-service-using-PHPMailer">https://github.com/RohanLayek/Free-Html-Email-service-using-PHPMailer</a></p>
  </div>
</div>
</body>
</html>
';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent Successfully.';
    header( "refresh:5;url=../index.php" );
}

?>