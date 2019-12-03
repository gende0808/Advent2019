<?php
error_reporting(0);
$lines = explode("\n", file_get_contents("Day3.txt"));
$line1 = explode(",", $lines[0]);
$line2 = explode(",", $lines[1]);
$grid = array(array());
$overlaps = array();
$result1 = fill_array($grid, $line1, false);
$result2 = fill_array($result1, $line2, true);
unset($overlaps[0]);
print_array(min($overlaps));

function fill_array($grid, $line, $special)
{
    $x = 0;
    $y = 0;
    global $overlaps;
    foreach ($line as $movement) {
        $direction = $movement[0];
        $distance = substr($movement, 1);
        if ($direction == "U") {
            $resultDistance = $y + $distance;
            while ($y < $resultDistance) {
                if ($special == true) {
                    if($grid[$y][$x] == "X" || $grid[$y][$x] == "!"){
                        $grid[$y][$x] = "!";
                        $overlaps[abs($y) + abs($x)] = abs($y) + abs($x);
                    }else{
                        $grid[$y][$x] = "O";
                    }
                } else{
                    $grid[$y][$x] = "X";
                }
                $y++;
            }
        }
        if ($direction == "D") {
            $resultDistance = $y - $distance;
            while ($y > $resultDistance) {
                if ($special == true) {
                    if($grid[$y][$x] == "X" || $grid[$y][$x] == "!"){
                        $grid[$y][$x] = "!";
                        $overlaps[abs($y) + abs($x)] = abs($y) + abs($x);
                    }else{
                        $grid[$y][$x] = "O";
                    }
                } else{
                    $grid[$y][$x] = "X";
                }
                $y--;
            }
        }
        if ($direction == "R") {
            $resultDistance = $x + $distance;
            while ($x < $resultDistance) {
                if ($special == true) {
                    if($grid[$y][$x] == "X" || $grid[$y][$x] == "!"){
                        $grid[$y][$x] = "!";
                        $overlaps[abs($y) + abs($x)] = abs($y) + abs($x);
                    }else{
                        $grid[$y][$x] = "O";
                    }
                } else{
                    $grid[$y][$x] = "X";
                }
                $x++;
            }
        }
        if ($direction == "L") {
            $resultDistance = $x - $distance;
            while ($x > $resultDistance) {
                if ($special == true) {
                    if($grid[$y][$x] == "X" || $grid[$y][$x] == "!"){
                        $grid[$y][$x] = "!";
                        $overlaps[abs($y) + abs($x)] = abs($y) + abs($x);
                    }else{
                        $grid[$y][$x] = "O";
                    }
                } else{
                    $grid[$y][$x] = "X";
                }
                $x--;
            }
        }
    }
    return $grid;

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