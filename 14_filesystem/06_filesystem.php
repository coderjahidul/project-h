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
$parts = explode(".", FILENAME);
echo array_pop($parts);