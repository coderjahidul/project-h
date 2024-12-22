<?php
class FileWriter{
    static $instance = [];
    private $filename;

    function __construct($filename){
        $this->filename = $filename;
    }

    static function getInstance($filename){
        if(!isset(self::$instance[$filename])){
            self::$instance[$filename] = new FileWriter($filename);
        }

        return self::$instance[$filename];
    }

    function writeData($data){
        echo "Writing data to {$this->filename} \n";
    }

    static function dump(){
        print_r(self::$instance);
    }
}

$fw1 = FileWriter::getInstance("file1.txt");
$fw2 = FileWriter::getInstance("file2.txt");
$fw3 = FileWriter::getInstance("file3.txt");
$fw4 = FileWriter::getInstance("file1.txt");
FileWriter::getInstance("file4.txt")->writeData("Hello");

$fw1->writeData("Hello");
$fw2->writeData("Hello");
$fw3->writeData("Hello");
$fw4->writeData("Hello");

FileWriter::dump();