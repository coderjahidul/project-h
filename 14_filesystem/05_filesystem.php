<?php 
// $dir = new DirectoryIterator("."); // Get the current directory
// foreach($dir as $file){
//     if($file->isDir()){ // Check if the file is a directory
//         continue;
//     }
//     // echo $file->getFileName() . "\n";

//     if($file->isDir()){ // Check if the file is a directory
//         echo $file->getPathname() . "\n";
//     }else{
//         echo $file->getPathname() . " (Size: " . $file->getSize() . " bytes)\n";
//     }

// }


// directory structure in a tree-like format
function printDirectoryTree($dirPath, $indent = "") {
    $dir = new DirectoryIterator($dirPath);
    foreach ($dir as $file){
        if($file->isDot()){
            // Skip "." and ".." directories
            continue;
        }

        if($file->isDir()){
            // Print the directory name
            echo $indent . "├── " . $file->getFileName() . "\n";

            // Recurse into the directory
            printDirectoryTree($file->getPathname(), $indent . "│   ");
        }else{
            // Print the file name and size
            echo $indent . "├── " . $file->getFileName() . " (Size: " . $file->getSize() . " bytes)\n"; 
        }
    }
}

// Call the function to print the directory tree
printDirectoryTree(".");


