<?php 
class Mailer{
    function sendMail($to, $form, $subject, $message){

    }

    function connectMTA($metaType, $username, $password){

    }

    function prepareMail($to, $form, $subject, $message){

    }

    function dispatch(){

    }
}

class BetterMailer{
    function __construct(MailGatewayInterface $img, MailInterface $mail, AttachmentInterface $attachment){
        $this->mg = $mg;
        $this->mail = $mail;
        $this->attachment = $attachment;

    }

    function sendMail($to, $form, $subject, $message, $attachment){
        $this->addAttachment($attachment);
        $mailBody = $this->mail->prepare($to, $form, $subject, $message);
        $this->mg->connect();
        $this->mg->send($mailBody);

    }
}