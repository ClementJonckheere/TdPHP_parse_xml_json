<?php

$json = file_get_contents('source/products.json');

$products = json_decode($json, true);

$total_stock_value = 0;

foreach ($products as $product) {
    $stock_value = $product['prix'] * $product['stock'];
    echo $product['nom'] . " - Valeur du stock : " . $stock_value . " EUR\n";

    $total_stock_value += $stock_value;
}

echo "Valeur totale du stock pour tous les produits : " . $total_stock_value . " EUR\n";