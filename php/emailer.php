<?php
require_once('config.php');
require_once('phpMailer/phpmailer.php');

if (!empty($_POST)) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    //validation - make sure nothing is empty and email is valid
    if (empty($name)) exit('Please provide your name');
    if (empty($email)) exit('Please provide your email');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) exit('Please provide a valid email');
    if (empty($message)) exit('Please provide a message');

    //send the email
    $mail=new PHPMailer();

    $mail->SetFrom($email,$name);
    $mail->AddAddress(TO_EMAIL,TO_NAME);

    //$mail->IsSMTP(); // enable SMTP
    $mail->SMTPSecure='ssl';
    $mail->SMTPAuth=true;
    $mail->Host=SMTP_HOST;
    $mail->Port=465;
    $mail->Username=SMTP_USERNAME;
    $mail->Password=SMTP_PASSWORD;

    $mail->Subject=SUBJECT;
    $mail->MsgHTML($message);

    if ($mail->Send()) {
        exit('sent');
    } else {
        exit('Message could not be sent at this time.');
    }

} else {
    exit('No data received');
}