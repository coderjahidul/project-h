<?php
class StringUtility{
    private $string;
    private $search;
    function __construct($string){
        $this->string = $string;
    }

    function search($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        if(!isset($this->search)){
            throw new Exception("Nothing to replace");
        }

        $this->string = str_replace($this->search, $string, $this->string);
        $this->search = "";
        return $this;
    }

    function upperCase(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }
}

// Method Chaining
// $string = new StringUtility("Hello World");
// $string->search("World")
// ->replace("PHP")
// ->search("Hello")
// ->replace("Hi")
// ->upperCase()
// ->lowerCase()
// ->print();

class StringUtility2{
    private $string;
    private $search;
    function __construct($string){
        $this->string = $string;
    }

    function search($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        if(!isset($this->search)){
            throw new Exception("Nothing to replace");
        }

        $this->string = str_replace($this->search, $string, $this->string);
        $this->search = "";
        return $this;
    }

    function upperCase(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }
}

$string = new StringUtility2("Hello World");
$string->search("World")
->replace("PHP")
->search("Hello")
->replace("Hi")
->upperCase()
->lowerCase()
->print();