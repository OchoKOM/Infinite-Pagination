<?php

$total = 2000;

// ! Generer une liste fictive
$allProducts = [];
for ($i=0; $i < $total; $i++) { 
    $productId = $i+1;
    $product = [
        "id" => $productId,
        "name" => "Product $productId",
        "description" => "Description pour produit $productId",
        "price" => rand(1, 100) . ".".str_pad(rand(0,99), 2, "0", STR_PAD_LEFT),
    ];
    $allProducts[] = $product;
}

// ! Fin de la génération de la liste fictive
$jssonData = json_encode([
    "products"=> $allProducts
]);

$file = "products.json";

file_put_contents($file, $jssonData);