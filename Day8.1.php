<?php
include "functions.php";
error_reporting(0);
$string = file_get_contents("Day8.txt");
$complete_array = str_split($string, 25 * 6);

$lowest_count = 200;
$lowest_key = 0;
$answer = 0;
$thing = array();
foreach ($complete_array as $key => $row) {
    $occurrences = count_chars($row, 1);
    $number_of_zeros = $occurrences[48];
    if ($number_of_zeros < $lowest_count) {
        $lowest_count = $number_of_zeros;
        $answer = $occurrences[49] * $occurrences[50];
        $thing = $occurrences;
        $lowest_key = $key;
    }
}
echo $answer;