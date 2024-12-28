<?php 
// set_time_limit(0); // if file is large
$ch = curl_init("https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg");
$file_name = fopen("image.jpg", "w");
curl_setopt($ch, CURLOPT_FILE, $file_name);
curl_exec($ch);
?>