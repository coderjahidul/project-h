<?php 
$curl = curl_init();
$search_string = "new movies on netflix 2024";
$url = "https://unsplash.com/s/photos/{$search_string}";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);

preg_match_all("#<img src=\"(.*?)\"#", $result, $matches);
$images = array_values(array_unique($matches[0]));

foreach($images as $image){
    echo "<div style='float:left; margin: 10 0 0 0;'><img src='{$image}'></div>";
}
curl_close($curl);
