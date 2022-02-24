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
    public string $type;

    public function __construct(string $itemName, float $price, int $quantity, float $taxRate, string $type)
    {
        $this -> itemName = $itemName;
        $this -> price = $price;
        $this -> quantity = $quantity;
        $this -> taxRate = $taxRate;
        $this -> type = $type;
    }

    function getPrice()
    {
        return $this -> price * $this -> quantity;
    }
    function getTax()
    {
        return $this->getPrice() * $this -> taxRate;
    }
    // New Case 2 Function
    function setDiscount(float $percentage)
    {
        $this -> price = $this -> price * $percentage;
    }

}

$bananas = new Item("Banaan", 1, 6, 0.06, "fruit");
$apples = new Item("Apple", 1.5, 3, 0.06, "fruit");
$wineBottles = new Item("Bottle Of Wine", 10, 2, 0.21, "wine");

$totalTax = 0;
echo $totalTax = $bananas ->getTax() + $apples -> getTax() + $wineBottles -> getTax();
echo "<br>";
$totalPrice = 0;
echo $totalPrice = $bananas -> getPrice() + $apples -> getPrice() + $wineBottles ->getPrice();

// Case 2 modifications start here

$bananas -> setDiscount(0.50);
$apples -> setDiscount(0.50);
echo "<br>" . $bananas -> price . "<br>" . $apples -> price;

// Case 2 Other Way
$apples -> price = 1.5;
$bananas -> price = 1;
$basket = [$bananas, $apples, $wineBottles];
function setDiscountOnFruits($basket, float $discount)
{
    foreach ($basket as $item)
    {
        if ($item -> type == "fruit") {
            $item -> price = $item -> price * $discount;
        }
    }
    return "<br> The price of fruits Are now " . ($discount * 100) . "% Off";
}

echo setDiscountOnFruits($basket,0.50);
echo "<br>" . $bananas -> price . "<br>" . $apples -> price;

