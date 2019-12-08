<?php
include "functions.php";
error_reporting(0);
$lines = explode("\n", file_get_contents("Day6.txt"));
$indexed_array = array();
$map_of_planets = array();
foreach ($lines as $line) {
    list($key, $value) = explode(')', $line);
    $indexed_array[$key] = $value;
}
$amount = 0;
$pointer = [1,"WLQ"];
while(array_search($pointer[1], $indexed_array)){
    $amount = $pointer[0] + 1;
    $pointer
}