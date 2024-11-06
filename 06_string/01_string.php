<?php
$name = "Jahidul Islam";
$age = 24;
$string01 = "my name is $name \n \t";
echo $string01;

$string02 = "my name is {$name} \n";
echo $string02;

// Heredoc
$string03 = <<<EOD
my name is $name
EOD;
echo $string03;
echo "\n";

// Nowdoc
$string04 = <<<'EOD'
my name is $name
EOD;
echo $string04;
echo "\n";

// Multiline
$string05 = <<<EOD
my name is $name
my name is $name
my name is $name
my name is $name
EOD;
echo $string05;
echo "\n";

// Heredoc
$string06 = <<<EOD
my name is $name my age is $age
my name is $name
EOD;
echo $string06;
echo "\n";

// Nowdoc
$string07 =<<<'NOWDOC'
my name is $name my age is $age
my name is $name
NOWDOC;
echo $string07;
echo "\n";