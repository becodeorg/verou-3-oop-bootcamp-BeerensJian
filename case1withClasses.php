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

class Item
{
    public string $itemName;
    public float $price;
    public int $quantity;
    public float $taxRate;

    public function __construct(string $itemName, float $price, int $quantity, float $taxRate)
    {
        $this -> itemName = $itemName;
        $this -> price = $price;
        $this -> quantity = $quantity;
        $this -> taxRate = $taxRate;
    }

    function getPrice()
    {
        return $this -> price * $this -> quantity;
    }
    function getTax()
    {
        return $this->getPrice() * $this -> taxRate;
    }

}

$banaan = new Item("banaan", 1, 6, 0.06);
$apples = new Item("Apple", 1.5, 3, 0.06);
$wineBottles = new Item("Bottle Of Wine", 10, 2, 0.21);

$totalTax = 0;
echo $totalTax = $banaan ->getTax() + $apples -> getTax() + $wineBottles -> getTax();
echo "<br>";
$totalPrice = 0;
echo $totalPrice = $banaan -> getPrice() + $apples -> getPrice() + $wineBottles ->getPrice();
