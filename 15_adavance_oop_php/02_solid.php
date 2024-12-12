<?php
interface FileInterface{
    function display();
}

class ImageFile implements FileInterface{
    private $fileName;

    function __construct($fileName){
        $this->fileName = $fileName;
    }
    function display(){
        // Take necessary step to display image
        echo "Displaying Image: " . $this->fileName  . "\n";
    }
}

class VideoFile implements FileInterface{
    private $fileName;

    function __construct($fileName){
        $this->fileName = $fileName;
    }
    function display(){
        // Take necessary step to display video
        echo "Displaying Video: " . $this->fileName . "\n";
    }
}

class AudioFile implements FileInterface{
    private $fileName;

    function __construct($fileName){
        $this->fileName = $fileName;
    }

    function display(){
        // Take necessary step to display audio
        echo "Displaying Audio: " . $this->fileName . "\n";
    }
}

class TextFile implements FileInterface{
    private $fileName;

    function __construct($fileName){
        $this->fileName = $fileName;
    }

    function display(){
        // Take necessary step to display text
        echo "Displaying Text: " . $this->fileName . "\n";
    }
}

$image = new ImageFile("image.jpg");
$video = new VideoFile("video.mp4");
$audio = new AudioFile("audio.mp3");
$text = new TextFile("text.txt");
$image->display();
$video->display();
$audio->display();
$text->display();
