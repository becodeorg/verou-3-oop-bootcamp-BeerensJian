<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("Article.php");
require("Ad.php");
require("Vacancie.php");


function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$article1 = new Article("Elon Musk is on Mars", "He made it to Mars after a succesfull launch of his rocket, he plans to live there from now on in his dome");
$article2 = new Article("Jeff Bezos is jealous", "Jeff Bezos is now jealous afetr musk is already livign on Mars and he on Earth, he's think about asking Musk for a ride");
$ad1 = new Ad("New Shampoo for more hair", "Big breakthrough for people who are losing hair");
$vacancie = new Vacancie("Spot open at BeCode", "Becode is hiring you gets lot of money and fame and emmh appriciation");

$articleList = [$article1, $article2, $ad1, $vacancie];

foreach ($articleList as $item){
    echo $item -> showArticle();
}




