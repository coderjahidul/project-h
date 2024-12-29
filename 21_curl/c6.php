<?php 
$ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSczjUB07gm-rW4e61UuQiy9t5uUMjtE9KrH7Xb_EvgdS9RjqA/formResponse");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.2131222200=Nasim+Uddin&entry.1337855740=Emon&entry.256906586=Cumilla,+Laksham&entry.1748059658=01641427678&entry.1310900128=nasim@gmail.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($ch);
if(curl_error($ch)){
    echo curl_error($ch);
}else{
    echo $return;
}