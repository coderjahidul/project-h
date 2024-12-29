<?php  
$data = [
    [
        "fname" => "Jahidul",
        "lname" => "Islam",
        "address" => "Laksham",
        "phone" => "01641427677",
        "email" => "sobuz0349@gmail"
    ],
    [
        "fname" => "Mojahidul",
        "lname" => "Islam",
        "address" => "Laksham",
        "phone" => "01641427678",
        "email" => "sobuz0349@gmail"
    ],
    [
        "fname" => "Shajalal",
        "lname" => "Islam",
        "address" => "Laksham",
        "phone" => "01641427679",
        "email" => "sobuz0349@gmail"
    ],
    [
        "fname" => "Salma",
        "lname" => "Islam",
        "address" => "Laksham",
        "phone" => "01641427680",
        "email" => "sobuz0349@gmail"
    ],
    [
        "fname" => "Siful",
        "lname" => "Islam",
        "address" => "Laksham",
        "phone" => "01641427681",
        "email" => "sobuz0349@gmail"
    ],
    [
        "fname" => "Sohel",
        "lname" => "Islam",
        "address" => "Laksham",
        "phone" => "01641427682",
        "email" => "sobuz0349@gmail"
    ],
    [
        "fname" => "জাহিদুল ইসলাম",
        "lname" => "সবুজ",
        "address" => "Laksham",
        "phone" => "01641427683",
        "email" => "sobuz0349@gmail"
    ]
];

foreach($data as $entry){
    $ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSczjUB07gm-rW4e61UuQiy9t5uUMjtE9KrH7Xb_EvgdS9RjqA/formResponse");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.2131222200=" . urlencode($entry['fname']) . "&entry.1337855740=" . urlencode($entry['lname']) . "&entry.256906586=" . urlencode($entry['address']) . "&entry.1748059658=" . urlencode($entry['phone']) . "&entry.1310900128=" . urlencode($entry['email']));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if(curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $result;
    }
}