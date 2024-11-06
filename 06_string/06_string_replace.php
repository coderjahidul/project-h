<?php
$string = "Quick brown Brown Fox fox jumps over the laze dog fox";
echo $string;
echo PHP_EOL;
echo PHP_EOL;

$replace_string_case_sensitive = str_replace("fox", "red", $string); // Replace "fox" with "red" case-sensitive
echo $replace_string_case_sensitive;
echo PHP_EOL;

$replace_string_case_insensitive = str_ireplace("fox", "red", $string); // Replace "fox" with "red" case-insensitive
echo $replace_string_case_insensitive;
echo PHP_EOL;

// string replace function and replace word count
$replace_string_case_insensitive = str_ireplace("fox", "cat", $string, $count); // Replace "fox" with "red" case-insensitive
echo $replace_string_case_insensitive;
echo PHP_EOL;
echo "Total Replacement: {$count}";
echo PHP_EOL;

// Replace multiple words
$multiple_replace = str_ireplace(array('fox', 'dog'), array('cat', 'cow'), $string, $replace_count);
echo PHP_EOL;
echo $multiple_replace;
echo PHP_EOL;
echo "Total Replacement: {$replace_count}";
echo PHP_EOL;
