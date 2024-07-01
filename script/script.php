<?php

//var_dump($todoList);
//header("Content-Type: application/json");

$rawList = file_get_contents("./data/toDo.json");

$list = json_decode($rawList, true);

var_dump($list);
