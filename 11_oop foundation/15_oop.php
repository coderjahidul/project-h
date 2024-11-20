<?php
class DistrictCollection {
    private $districts = [];

    function add($districts){
        array_push($this->districts, $districts);
    }

    function getDistricts(){
        return $this->districts;
    }
}

$districts = new DistrictCollection();
$districts->add("Cumilla");
$districts->add("Chittagong");
$districts->add("Dhaka");
$districts->add("Rajshahi");
$districts->add("Sylhet");
$districts->add("Khulna");
$districts->add("Rangpur");
$districts->add("Mymensingh");

$districts = $districts->getDistricts();
foreach($districts as $district){
    echo $district . "\n";
}