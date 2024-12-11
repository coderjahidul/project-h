<?php
const FILENAME = "c:\\laragon\\www\\project-h\\14_filesystem\\06_filesystem.php";
echo pathinfo(FILENAME, PATHINFO_DIRNAME); // Show the directory name
echo "\n";
echo pathinfo(FILENAME, PATHINFO_BASENAME); // Show the file name
echo "\n";
echo pathinfo(FILENAME, PATHINFO_EXTENSION); // Show the file extension
echo "\n";
echo pathinfo(FILENAME, PATHINFO_FILENAME); // Show the file name without extension
echo "\n";
$parts = explode(".", FILENAME); // Split the file name into an array
echo array_pop($parts); // Show the file extension
echo "\n";

// show the directory name
echo dirname(FILENAME);
echo "\n";

// Show the directory name another way
echo pathinfo(FILENAME, PATHINFO_DIRNAME);
echo "\n";

// Show the file name
echo basename(FILENAME);
echo "\n";

// Show the file name another way
echo pathinfo(FILENAME, PATHINFO_BASENAME);
echo "\n";

// Show the file extension
echo pathinfo(FILENAME, PATHINFO_EXTENSION);
echo "\n";

// Show the file extension another way
$parts = explode(".", FILENAME);
echo array_pop($parts);
echo "\n";
// Show the file name without extension
echo pathinfo(FILENAME, PATHINFO_FILENAME);
echo "\n";
echo "\n";
echo "\n";
// ********************************************************************************
// Show the directory name
echo dirname(FILENAME);
echo "\n";

// Show the directory name another way
echo pathinfo(FILENAME, PATHINFO_DIRNAME);
echo "\n";

// Show the file name
echo basename(FILENAME);
echo "\n";

// Show the file name another way
echo pathinfo(FILENAME, PATHINFO_BASENAME);
echo "\n";

// Show the file extension
echo pathinfo(FILENAME, PATHINFO_EXTENSION);
echo "\n";

// Show the file extension another way
$part = explode(".", FILENAME);
echo array_pop($part); // array_pop() returns the last element of an array
echo "\n";

// Show the file name without extension
echo pathinfo(FILENAME, PATHINFO_FILENAME);
echo "\n";

