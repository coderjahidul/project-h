<?php
//mkdir("test", 0777, true); // Create a directory named "test" in the current directory with read, write, and execute permissions for all users
//sleep(3); // sleep this function for 3 seconds
//rmdir("test"); // Remove the directory named "test  

//mkdir("test", 0777, true); // Create a directory named "test" in the current directory with read, write, and execute permissions for all users

//file_put_contents("test/file.txt", "Hello World"); // Write "Hello World" to a file named "file.txt" in the "test" directory

//sleep(15); // sleep this function for 5 seconds

//unlink("test/file.txt"); // Remove the file named "file.txt" from the "test" directory

//rmdir("test"); // Remove the directory named "test" 

// Create mkdir function
function createDir($dirName, $fileName, $fileContent) {
    if(!file_exists($dirName)){
        echo "Creating directory. Please wait... \n";
        sleep(3);
        mkdir($dirName, 0777, true);
        echo "Directory created successfully. \n";
        sleep(1);
    }

    // file path
    $filePath = $dirName . "/" . $fileName . ".txt";

    // Check if the file already exists
    if(file_exists($filePath)){
        echo "File already exists. \n";
    }else {
        echo "Creating file. Please wait... \n";
        sleep(3);
        file_put_contents($filePath, $fileContent);
        echo "Your file created successfully. \n";
    }
    
}

// Call createDir function
// createDir("test5", "file2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos natus odit eligendi. Omnis architecto ut vel consectetur perspiciatis itaque natus.");


// Create rmdir function
function removeDir($dirName){
    // Check if the directory exists
    if(file_exists($dirName)){
        echo "Deleting directory. Please wait... \n";
        sleep(3);
        // Unlink all files in the directory
        $files = glob($dirName . "/*"); // Get all files in the directory
        foreach($files as $file){
            unlink($file); // Remove each file
        }

        // Remove the directory
        if(rmdir($dirName)){
            echo "Directory removed successfully. \n";
        }else{
            echo "Failed to remove directory. \n";
        }
    }else{
        echo "Directory not found. \n";
    }
    
}

// Call removeDir function
// removeDir("test5");
deleteDirectory("test5");

// Create deleteDirectory function
function deleteDirectory($dirName){
    // Check if the diretory exists
    if(file_exists($dirName)){
        echo "Deleting directory. Please wait... \n";
        sleep(1);

        // Get all files and subdirectories in the directory
        // $files = glob($dirName . "/*"); // Get all files and subdirectories in the directory
        $files = array_diff(scandir($dirName), ['.', '..']); // Get all files and subdirectories in the directory

        foreach($files as $file){
            $path = $dirName . DIRECTORY_SEPARATOR . $file;
            if(is_dir($path)){
                // Recursively delete subdirectories
                deleteDirectory($path);
            }else{
                // Delete files
                unlink($path);
            }
        }

        // Remove the directory
        if(rmdir($dirName)){
            echo "Directory removed successfully. \n";
        }else {
            echo "Failed to remove directory. \n";
        }
    }else {
        echo "Directory '$dirName' not found or is not a directory. \n";
    }
}