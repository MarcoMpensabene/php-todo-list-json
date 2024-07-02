<?php


header("Content-type: application/json");


$rawList = file_get_contents("../data/toDo.json");

$data = json_decode($rawList, true);

echo json_encode($data);

$idsData = [];
