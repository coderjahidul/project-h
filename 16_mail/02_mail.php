<?php
// Send email and attachment using PHP Second way
$to = "sobuz0349@gmail.com";
$from = "John Doe <test@example.com>";
$subject = "Test email with attachment";
$mainMessage = "Hello, \nThis is a test email";
$fileName = "./google-information.pdf";
$fileNewName = "google-information.pdf";

$fileData = file_get_contents($fileName);
if($fileData === false){
    echo "File not found";
}
$boundary = "HereIsTheBoundary";

// Headers
$headers = "From: {$from}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed;\r\n";
$headers .= " Boundary=\"{$boundary}\r\n";

// Message
$message = "This is a multipart message in MIME format.\r\n";
$message .= "--{$boundary}\r\n";
$message .= "Content-Type: text/plain; charset='UTF-8'\r\n";
$message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$message .= "{$mainMessage}\r\n\r\n";

$encodedFileData = chunk_split(base64_encode($fileData));

$message .= "--{$boundary}\r\n";
$message .= "Content-Type: application/pdf;\r\n";
$message .= " name='{$fileNewName}'\r\n";
$message .= "Content-Disposition: attachment;\r\n";
$message .= "Content-Transfer-Encoding: base64\r\n\r\n";
$message .= $encodedFileData."\r\n";
$message .= "--{$boundary}--\r\n";

$mailSend = mail($to, $subject, $message, $headers);

if($mailSend){
    echo "Email sent successfully";
}else{
    echo "Email sending failed";
}