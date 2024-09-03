<?php 
// Remove data in associative array
$student_list = array(
    "Jahidul" => "Jahidul Islam",
    "Rakib" => "Rakibul Islam",
    "Rahim" => "Rahim Islam",
    "Karim" => "Karim Islam",
    "Rasel" => "Rasel Islam",
    "Rafi" => "Rafi Islam",
    "Mojahid" => "Mojahid Islam",
);

print_r($student_list);

// Remove data by key
unset($student_list["Rakib"]);
print_r($student_list);

// Remove data by key
unset($student_list["Karim"]);    
print_r($student_list);