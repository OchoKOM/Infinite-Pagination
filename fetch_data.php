<?php
$jsonFilePath = "./products.json";

if(!file_exists($jsonFilePath) || !is_readable($jsonFilePath)){
    http_response_code(500);
    echo json_encode([
        "error" => "File not found or not readable",
    ]);
    exit();
}

// ? Recuperer et convertir le tableau json
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData);

header('Conten-Type: application/json');
echo $jsonData;