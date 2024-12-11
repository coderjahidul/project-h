<?php 
// copy file and directory from one place to another
function copyDir($source, $destination){
    // File Count
    $fileCount = 0;

    // Directory Count 
    $dirCount = 1;

    // Remove trailing slashes
    $source = rtrim($source, '/'); // rtrim() removes the specified characters from the end of a string

    $destination = rtrim($destination, '/'); // rtrim() removes the specified characters from the end of a string

    // Create the destination directory
    if(!file_exists($destination)){ // file_exists() checks if a file or directory exists
        mkdir($destination); // mkdir() creates a directory
    }

    // Copy files and directories
    foreach(scandir($source) as $file){
        // Skip current and parent directories
        if("." != $file && ".." != $file){
            // Get the source and destination paths
            $sourcePath = $source . DIRECTORY_SEPARATOR . $file; // DIRECTORY_SEPARATOR is a constant that represents the directory separator
            $destinationPath = $destination . DIRECTORY_SEPARATOR . $file; // DIRECTORY_SEPARATOR is a constant that represents the directory separator

            // Copy the file or directory
            if(is_dir($sourcePath)){
                $result = copyDir($sourcePath, $destinationPath); // Recursively copy the directory
                $fileCount += $result[0];
                $dirCount += $result[1];
            }elseif(is_file($sourcePath)){
                $fileCount++;
                copy($sourcePath, $destinationPath); // Copy the file
            }
        }
    }
    echo "Files and Directories Copied. Please wait...\n";
    usleep(100000); // usleep() suspends execution for a specified number of microseconds
    return array($fileCount, $dirCount);
}

// Copy file and directory from one place to another
$source = getcwd()  . "/14_filesystem/source/twentytwentyfour";
// print_r($source);
// echo "\n";
$destination = getcwd() . "/14_filesystem/target/twentytwentyfour";
// print_r($destination);

// Call the copyDir function
$cf = copyDir($source, $destination);
echo "Total Files Copied: $cf[0] and Total Directories Copied: $cf[1]\n";
