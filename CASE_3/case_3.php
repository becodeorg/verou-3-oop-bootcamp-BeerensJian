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

$student1 = new Student("Basile", 2);
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



function removeStudentFromGroup(array $arr, $student)
{
    foreach($arr as $key => $value) {
        if ($value-> name == $student) {
            $removedStudent = $value;
            unset($arr[$key]);
            break;
        }
    }

    return ["student" => $removedStudent, "array" => $arr];
}


function switchGroups(array $fromArr, array &$toArr, $student)
{
    $returnedArray = removeStudentFromGroup($fromArr, $student);
    $toArr[] = $returnedArray["student"];

    return $returnedArray["array"];
}


function getAverageOfGroup($group)
{
    $numberOfStudents = count($group);
    $groupAverage = 0;
    foreach ($group as $student) {
        $groupAverage += $student -> grade;
    }

    return "<br>" . $groupAverage / $numberOfStudents;
}

// Step 3 :

function ExchangeStudents($group1, $group2) {

}

echo getAverageOfGroup($studentGroup1);

$studentGroup1 = switchGroups($studentGroup1,$studentGroup2,"Basile");

pre_r($studentGroup1);
pre_r($studentGroup2);

echo getAverageOfGroup($studentGroup1);
echo getAverageOfGroup($studentGroup2);

