<?php 
//echo getcwd(); // get current working directory



$entries = scandir(getcwd()); // List files and directories inside the specified path
foreach($entries as $entry){
    if("." != $entry && ".." != $entry){
        if(is_dir($entry)){
            echo "[d] => " . $entry . PHP_EOL;
        }else{
            echo "[f] => " . $entry . PHP_EOL;
        }
    }
}

// Count number of directories
function countDir($dir){
    $count = 0;
    $entries = scandir($dir);
    foreach($entries as $entry){
        if("." != $entry && ".." != $entry){
            if(is_dir($entry)){
                $count++;
            }
        }
    }
    return $count;
}

$total_dir = countDir(getcwd());
echo "Total Directory: " . $total_dir . PHP_EOL;

// Count number of files
function countFile($dir){
    $count_file = 0;
    $entries = scandir($dir);
    foreach($entries as $entry){
        if("." != $entry && ".." != $entry){
            if(is_file($entry)){
                $count_file++;
            }
        }
    }
    return $count_file;
}

$total_file = countFile(getcwd());
echo "Total File: " . $total_file . PHP_EOL;
