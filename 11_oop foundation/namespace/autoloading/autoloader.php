<?php 
// Autoloading
spl_autoload_register(function($className){

    // Replace namespace with path
    $path = strtolower(str_replace("CloudStorage\\", "", $className)).".php";

    // Replace \ with /
    // $filePath = str_replace("\\", "/", $path);

    // Replace \ with / another way
    $filePath = str_replace("\\", DIRECTORY_SEPARATOR, $path);

    // Include file
    include_once $filePath;
});