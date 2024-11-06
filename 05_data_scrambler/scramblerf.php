<?php
function displayKey($key){
    printf(" value = '%s' ", $key);
}

function scrambleData($originalData, $key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData); // Get the length of the original data
    for($i = 0; $i < $length; $i++){
        $currentChar = $originalData[$i];
        $position = strpos($originalKey, $currentChar); // Find the position of the current character in the original key
        if($position !== false){
            $data .= $key[$position]; // Add the corresponding character from the key to the scrambled data
        }else{
            $data .= $currentChar; // If the current character is not in the original key, add it to the scrambled data
        }
    }

    return $data;
}

function decodeData($originalData, $key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData); // Get the length of the original data
    for($i = 0; $i < $length; $i++){
        $currentChar = $originalData[$i];
        $position = strpos($key, $currentChar); // Find the position of the current character in the key
        if($position !== false){
            $data .= $originalKey[$position]; // Add the corresponding character from the original key to the decoded data
        }else{
            $data .= $currentChar; // If the current character is not in the key, add it to the decoded data
        }
    }

    return $data;
}