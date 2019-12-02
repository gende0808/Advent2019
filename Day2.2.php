<?php
$numbers = [1,0,0,3,1,1,2,3,1,3,4,3,1,5,0,3,2,1,9,19,1,19,5,23,2,6,23,27,1,6,27,31,2,31,9,35,1,35,6,39,1,10,39,43,2,9,43,47,1,5,47,51,2,51,6,55,1,5,55,59,2,13,59,63,1,63,5,67,2,67,13,71,1,71,9,75,1,75,6,79,2,79,6,83,1,83,5,87,2,87,9,91,2,9,91,95,1,5,95,99,2,99,13,103,1,103,5,107,1,2,107,111,1,111,5,0,99,2,14,0,0];

$extraArray = $numbers;
while($extraArray[1] < 100) {
    $extraArray[2] = 0;
    while ($extraArray[2] < 100) {
        if(getResult($extraArray) == 19690720){
            echo (100 * $extraArray[1]) + $extraArray[2];
            exit();
        }
        $extraArray[2]++;
    }
    $extraArray[1]++;
}
function getResult($numbers){
    $breakloop = false;
    for ($loops = 0; $loops <= count($numbers); $loops = $loops + 4) {
        switch ($numbers[$loops]) {
            case 1:
                $numbers[$numbers[$loops + 3]] = ($numbers[$numbers[$loops + 2]] + $numbers[$numbers[$loops + 1]]);
                break;
            case 2:
                $numbers[$numbers[$loops + 3]] = ($numbers[$numbers[$loops + 2]] * $numbers[$numbers[$loops + 1]]);
                break;
            case 99:
                $breakloop = true;
                break;
        }
        if ($breakloop === true) {
            return $numbers[0];
        }
    }
    return 0;
}
