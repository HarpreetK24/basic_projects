<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

 // Passing `true` enables exceptions

try {
    //settings
     // Enable verbose debug output
     $mail=new PHPMailer(true);
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true; // Enable SMTP authentication
    $mail->Username='ilearncourse0@gmail.com'; // SMTP username
    $mail->Password='qnrpenlagubrjpud'; // SMTP password
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('ilearncourse0@gmail.com');

    //recipient
    $mail->addAddress($_POST['email']);     // Add a recipient

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject='Registration confirmation mail';
    $mail->Body='Dear '.$_POST['name'].', thank you for registering on our website.';

    $mail->send();

    // echo 'Message has been sent';
} 
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
}

?>