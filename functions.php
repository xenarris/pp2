<?php

//step 3
function printArr(array $array) {
    foreach ($array as $num) {
        echo $num . "<br>";
    }
}

//step 4
function largest(array $array) {
    $largest = 0;
    foreach ($array as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }
    return $largest;
}

//step 5
function removeDups(array $array): array {
    return array_unique($array);
}