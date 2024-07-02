<?php
header("Content-Type: application/json");

$idsData = [];

if (isset($_GET["addTask"])) {
    $data = file_get_contents(__DIR__ . "/../data/toDo.json");

    $data = json_decode($data, true);

    foreach ($data as $item) {
        $idsData[] = $item["id"];
    };

    $data[] = [
        "task" => $_GET["addTask"],
        "completed" => false,
        "id" => max($idsData) + 1,
        "dueData" => "today"
    ];

    $jsonData = json_encode($data);

    file_put_contents(__DIR__ . "/../data/toDo.json", $jsonData);

    header("Location: ../index.php");
} else {
    http_response_code(404);
}
