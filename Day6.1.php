<?php
include "functions.php";
error_reporting(0);
$lines = explode("\n", file_get_contents("Day6.txt"));
$indexed_array = array();
$map_of_planets = array();
foreach ($lines as $line) {
    list($key, $value) = explode(')', $line);
    $indexed_array[$key] = (string) trim($value, "\ \t\n\r\0\x0B");
}
$total_count = 0;
print_array($indexed_array);
foreach ($indexed_array as $key => $value) {
    $count = 0;
    $thing = $value;
        while($thing != "COM"){
        $new_key = array_search($thing, $indexed_array);
        $thing = $indexed_array[$new_key];
        $count++;
    }
    $total_count += $count;
}