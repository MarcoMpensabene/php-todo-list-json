<?php
header("Content-Type: application/json");

$idsData = [];

if (isset($_GET["addTask"])) {
    $data = file_get_contents("../data/toDo.json");

    $data = json_decode($data, true);

    $data[] = [
        "task" => $_GET["addTask"],
        // "dueData" =>  $_GET["addDate"]
    ];

    $jsonData = json_encode($data);

    file_put_contents("../data/toDo.json", $jsonData);

    header("Location: ../index.php");
} else {
    http_response_code(404);
}
