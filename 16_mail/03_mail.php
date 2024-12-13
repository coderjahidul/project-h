<?php
require_once('./16_mail/PHPMailer-master/PHPMailer.php');
require_once('./16_mail/PHPMailer-master/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try {
    $pm->setFrom("test@test.com");
    $pm->addAddress("sobuz0349@gmail.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Hero is the <strong>Invoice</strong> from your last purchase";
    $pm->AltBody = "Hi, Hero is the Invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("./google-information.pdf");
    $pm->send();
    echo "Email has been sent";
}catch (Exception $e){
    echo "Failed: " . $e->getMessage();
}