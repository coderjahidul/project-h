<?php
interface BaseStorage{
    function setFileName($fname);
    function writeData($data);
    function setMood($mood);
}

class Storage implements BaseStorage{
    private $filename;
    private $mood;
    public function __construct($fname, $mood= null){
        $this->setFileName($fname);
        $this->mood = $mood;
    }

    public function setFileName($fname){
        $this->filename = $fname;
    }

    public function writeData($data){
        file_put_contents($this->filename, $data, $this->mood);
    }

    public function appendData($data){
        file_put_contents($this->filename, $data, FILE_APPEND);
    }

    function setMood($mood){
        $this->mood = $mood;
    }
}

// class DataManager{
//     function saveData($filename, $data){
//         $storage = new Storage($filename);
//         $storage->writeData($data);
//     }
// }

class DataManager{
    function saveData(BaseStorage $storage, $data){
        $storage->writeData($data);
    }
}

$file = new Storage("C:/laragon/www/project-h/abcd.txt");
$file->setMood(FILE_APPEND);
// $file->setMood(null);
$dm = new DataManager();
$dm->saveData($file, " 2 My Data");