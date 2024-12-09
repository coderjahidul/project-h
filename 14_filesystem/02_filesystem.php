<?php 
    $entries = opendir(getcwd()); // List files and directories inside the specified path
    while(false !== ($entry = readdir($entries))){ // Read the next directory entry
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
        $count_dir = 0;
        $entries = opendir($dir);

        while(false !== ($entry = readdir($entries))){
            if("." != $entry && ".." != $entry){
                if(is_dir($entry)){
                    $count_dir++;
                }
            }
        }
        return $count_dir;
    }

    $total_dir = countDir(getcwd());
    echo "Total Directory: " . $total_dir . PHP_EOL;

    // Count number of files
    function countFile($dir){
        $count_file = 0;
        $entries = opendir($dir);
        while(false !== ($entry = readdir($entries))){
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
    

