<?php 
namespace CloudStorage\FileSystem\Files\Images; // namespace
use \CloudStorage\FileSystem\Files\Contracts\ImageContract; // use alias
use \CloudStorage\Mail\Mailer; // use alias

// Implement the ImageContract interface Within the Jpeg Class
class Jpeg implements ImageContract{
    function getDimension(){
        // Call the Mailer Class
        // (new Mailer())->sendMail();

        // Call the Mailer Class another way
        $mailer = new Mailer();
        echo $mailer->sendMail();

        // Return the dimension
        return "1280x720 pixels \n";
    }
}