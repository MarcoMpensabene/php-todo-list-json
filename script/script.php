<?php


//header("Content-type: application/json");


$rawList = file_get_contents(__DIR__ . "/../data/toDo.json");

echo $rawList;
