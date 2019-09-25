<?php

namespace Models;

require_once("Config/Autoload.php");
use Models\Item as Item;

$originList = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,pintura fluor 1L, pintura warner fluo, 400.00, 3,plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,pincel común 1.2, pincel fabber cerda común para tempera, 120.00, 5,rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2,kit de acuarelas, combo de acuarelas color pastel, 770.00, 2 ";

$originList = trim($originList, ' ');

$arrayToJson = array();

$originList = explode(',', $originList);

while(!empty($originList)){
    $item = new Item();
    $item ->setName(array_shift($originList)) ;
    $item ->setDesc(array_shift($originList)); 
    $item ->setPrice(array_shift($originList));
    $item ->setQty(array_shift($originList));

    array_push($arrayToJson, $item);
}

$publicArray = array();

foreach($arrayToJson as $item){
    $data = $item->objectToJson();
    array_push($publicArray, $data);
}

var_dump($publicArray);
//var_dump($arrayToJson);

$jsonContent = json_encode($publicArray, JSON_PRETTY_PRINT);

var_dump($jsonContent);

file_put_contents('repositories/json-test.json', $jsonContent);






?>