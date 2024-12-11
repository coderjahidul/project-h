<?php 
// glob() returns an array of file paths that match the specified pattern
//$files = glob("*"); // glob() returns an array of file paths that match the specified pattern
//print_r($files);

//print_r(glob("./*")); // get all files and directories inside the current directory

//print_r(glob("*/*")); // get all files and directories inside the current directory

//print_r(glob("./*", GLOB_ONLYDIR)); // get only directories inside the current directory

print_r(glob("../*{u,t}*", GLOB_ONLYDIR|GLOB_BRACE)); // get only directories inside the current directory