<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function myFunction($array, $value)
{
    $filteredArray = array_filter($array);
    $randomizedArray = array_rand($filteredArray, $value);
    $result = array_map(function ($item) use ($filteredArray) {
        return $filteredArray[$item];
    }, $randomizedArray);
    return $result;
}

echo "<pre>";
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));
?>