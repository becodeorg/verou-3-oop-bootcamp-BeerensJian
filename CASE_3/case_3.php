<?php

declare(strict_types=1);
require("Student.php");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$student1 = new Student("Basile", 1);
$student2 = new Student("Basilicum", 10);
$student3 = new Student("Basila", 3);
$student4 = new Student("Basilo", 9);
$student5 = new Student("Basileta", 6);

$student6 = new Student("Bert", 9);
$student7 = new Student("Burt", 4);
$student8 = new Student("Bertje", 8);
$student9 = new Student("Big Boi Bert", 7);
$student10 = new Student("Bert The Second", 8);

$studentGroup1 = [$student1, $student2, $student3, $student4, $student5];
$studentGroup2 = [$student6, $student7, $student8, $student9, $student10];

function getAverageOfGroup($group)
{
    $numberOfStudents = count($group);
    $groupAverage = 0;
    foreach ($group as $student) {
        $groupAverage += $student -> grade;
    }

    return $groupAverage / $numberOfStudents;
}

echo getAverageOfGroup($studentGroup1);