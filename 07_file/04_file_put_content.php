<?php 
$fileName = __DIR__ . '/data/file2.txt';
if(file_exists($fileName) && is_writable($fileName)){
    file_put_contents($fileName, "Hello\n", FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, "World\n", FILE_APPEND | LOCK_EX);
}