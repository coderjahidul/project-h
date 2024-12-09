<?php 
class Dir{
    private $directories =[];
    private $files =[];
    private $path;
    public function __construct($path){
        if(is_readable($path)){
            $this->path = $path;
            $entries = scandir($path);
            foreach($entries as $entry){
                if("." != $entry && ".." != $entry){
                    if(is_dir($path . DIRECTORY_SEPARATOR . $entry)){
                        array_push($this->directories, $entry);
                    }else{
                        array_push($this->files, $entry);
                    }
                }
            }
        }
    }

    public function getDirectory($index){
        if(isset($this->directories[$index])){
            return new Dir($this->path . DIRECTORY_SEPARATOR . $this->directories[$index]);
        }else{
            throw new Exception("Directory not found");
        }
        return false;
    }

    public function getDirectories(){
        return $this->directories;
    }

    public function getFile(){
        return $this->files;
    }
}

$directory = new Dir(getcwd());
print_r($directory->getDirectories());
print_r($directory->getFile());

$oop = $directory->getDirectory(4);
print_r($oop->getDirectories());
print_r($oop->getFile());

$foundation = $oop->getDirectory(0);
print_r($foundation->getFile());