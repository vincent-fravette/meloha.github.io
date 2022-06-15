<?php

$jsonFile = file_get_contents(ROOT_PATH."json/prices.json");
$json = json_decode($jsonFile);
$services = $json->services; // tableau des prestations proposées

$jsonFile = file_get_contents(ROOT_PATH."json/description.json");
//$json = json_decode($jsonFile); // OBJECT
$json = json_decode($jsonFile, true); // ARRAYS
$description = $json;

function displayText($key) {
    global $benefits;
    $class = isset($benefits[$key]->text) ? "" : "d-none";
    echo $class;
}

function displaySubText($key) {
    global $benefits;
    $class = isset($benefits[$key]->subText) ? "" : "d-none";
    echo $class;
}

?>