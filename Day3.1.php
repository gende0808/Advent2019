<?php

$lines = explode("\n", file_get_contents("Day3.txt"));

$line1 = explode(",", $lines[0]);
$line2 = explode(",", $lines[1]);
$x = 0;
$y = 0;
$grid = array(array());

foreach ($line1 as $movement) {
    $direction = $movement[0];
    $distance = substr($movement, 1);
    if ($direction == "U") {
        $y = $distance;
        for ($dist = 0; $dist < $distance; $dist++) {
            $grid[$x][$dist] = "X";
        }
    }
    if ($direction == "D") {
        $y = $distance;
        for ($dist = 0; $dist < $distance; $dist++) {
            $grid[$x][$dist] = "X";
        }
    }


}

foreach ($grid as $line) {
    foreach ($line as $dot) {
        echo $dot;
        "<br>";
    }
    echo "<br>";
}

function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}