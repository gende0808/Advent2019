<?php
$complete_array = str_split(file_get_contents("Day8.txt"), 25 * 6);

$lowest_count = 200;
$answer = 0;
foreach ($complete_array as $key => $row) {
    $occurrences = count_chars($row, 1);
    $number_of_zeros = $occurrences[48];
    if ($number_of_zeros < $lowest_count) {
        $lowest_count = $number_of_zeros;
        $answer = $occurrences[49] * $occurrences[50];
    }
}
echo $answer;