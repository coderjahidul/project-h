<?php
// PHPMailer function with SMTP
require_once('./16_mail/PHPMailer-master/PHPMailer.php');
require_once('./16_mail/PHPMailer-master/Exception.php');
require_once('./16_mail/PHPMailer-master/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{
    $pm->SMTPDebug = 2;
    $pm->isSMTP(true);
    $pm->Host = 'mail.hasin.me';
    $pm->SMTPAuth = true;
    $pm->Username = "test@hasin.me";
    $pm->Password = "--!F&7RZ@Kuh";
    $pm->SMTPSecure = 'tls';
    $pm->Port = 587;
    
    $pm->setFrom("test@hasin.me");
    $pm->addAddress("sobuz0349@gmail.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Hero is the <strong>Invoice</strong> from your last purchase";
    $pm->AltBody = "Hi, Hero is the Invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("./google-information.pdf");
    $pm->send();
    echo "Email has been sent";
}catch(Exception $e){
    echo "Message could not be sent. Mailer Error: {$e->getMessage()}";
}

