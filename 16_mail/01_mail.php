<?php
// Send email using PHP First way
// $to = "sobuz0349@gmail.com";
// $from = "test@example.com";
// $cc = "sobuz00349@gmail.com";
// $subject = "Test email";
// $body = "Hello, \nThis is a test email";
// $headers = "From: Jahidul<" . $from . ">\r\n";
// $headers .= "Cc: " . $cc . "\r\n";
// $mailsend = mail($to, $subject, $body, $headers);

// if($mailsend){
//     echo "Email sent successfully";
// }else{
//     echo "Email sending failed";
// }

$to = "sobuz0349@gmail.com";
$from = "test@example.com";
$cc = "sobuz00349@gmail.com";
$subject = "Test email";
$body = "<strong>Hello</strong><br>This is a test email<br>";
$body .= "<img src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fletsenhance.io%2F&psig=AOvVaw2nLcMtit2HqKxhTyeSZSG7&ust=1734138488822000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLCE_bbHo4oDFQAAAAAdAAAAABAE'>";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Jahidul<" . $from . ">\r\n";
$headers .= "Cc: " . $cc . "\r\n";

mail($to, $subject, $body, $headers);