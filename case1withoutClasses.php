<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$basketItem = [["item" => "banaan", "quantity" => 6, "price" => 1, "tax" => 0.06],
    ["item" => "apple", "quantity" => 3, "price" => 1.5, "tax" => 0.06],
    ["item" => "Bottle of Wine", "quantity" => 2, "price" => 10, "tax" => 0.21]];

function getTotalPrice($array)
{
    $totalPrice = 0;
    foreach ($array as $item) {
        $oneItemPrice = $item["quantity"] * $item["price"];
        $totalPrice += $oneItemPrice;
    }

    return $totalPrice;
}

function getTotalTaxes($array)
{
    $totalTaxes = 0;
    foreach ($array as $item) {
        $oneItemTax = ($item["quantity"] * $item["price"]) * $item["tax"];
        $totalTaxes += $oneItemTax;
    }

    return $totalTaxes;
}

echo getTotalPrice($basketItem);
echo "<br>";
echo getTotalTaxes($basketItem);




