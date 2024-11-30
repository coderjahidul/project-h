<?php 
namespace CloudStorage; // namespace 
//include "mail/mailer.php"; // manual include

// include autoloader file
include "autoloader.php";

use \CloudStorage\Mail\Mailer; // use alias
use \CloudStorage\FileSystem\Scanner; // use alias 
use \CloudStorage\FileSystem\Files\Images\Jpeg; // use alias

class Main{
    function __construct(){
        // Call the Mailer Class
        // (new Mail\Mailer())->sendMail();

        // Call the Mailer Class another way
        // $mailer = new Mail\Mailer();
        // $mailer->sendMail();

        // Call the Mailer Class another way in use alias
        $mailer = new Mailer();
        $mailer->sendMail();

        // Call the Scanner Class in use alias
        $scanner = new Scanner();
        $scanner->scanFile();

        // Call the ImageContract Class in use alias
        $images = new Jpeg();
        $jpeg = $images->getDimension();
        echo $jpeg;

    }
}

new Main();
