<?php
//Day 1 Part 1
echo "Part 1: <br>";
$input = explode("\n", file_get_contents('input1.txt'));
$totalFuel = 0;
foreach($input as $mass){
    $fuel = floor((int) $mass / 3) - 2;
    $totalFuel += $fuel;
}
echo $totalFuel;

//Day 1 Part 2
echo "<br>Part 2: <br>";
$input = explode("\n", file_get_contents('input1.txt'));
$totalFuel = 0;
foreach($input as $mass){
    $fuel = floor((int) $mass / 3) - 2;
    $totalFuel += $fuel;
    while($fuel > 8){
        $fuel = floor($fuel / 3) - 2;
        $totalFuel += $fuel;
    }
}
echo $totalFuel;
