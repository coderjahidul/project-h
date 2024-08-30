<?php
// Null coalescing operator
$default = 15.25;
$results;

$null_close = $results ?? $default;
echo $null_close;