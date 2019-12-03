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
echo min($overlaps);


function fill_array($grid, $line, $special)
{
    $steps = 0;
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
                    if ($grid[$y][$x][0] == "X" || $grid[$y][$x][0] == "!") {
                        $grid[$y][$x][0] = "!";
                        $overlaps[abs($y) + abs($x)] = $steps + $grid[$y][$x][1];
                    } else {
                        $grid[$y][$x][0] = "O";
                    }
                } else {
                    if ($grid[$y[$x]][0] != "X") {
                        $grid[$y][$x] = ["X", $steps];
                    }
                }
                $y++;
                $steps++;
            }
        }
        if ($direction == "D") {
            $resultDistance = $y - $distance;
            while ($y > $resultDistance) {
                if ($special == true) {
                    if ($grid[$y][$x][0] == "X" || $grid[$y][$x][0] == "!") {
                        $grid[$y][$x][0] = "!";
                        $overlaps[abs($y) + abs($x)] = $steps + $grid[$y][$x][1];
                    } else {
                        $grid[$y][$x][0] = "O";
                    }
                } else {
                    if ($grid[$y[$x]][0] != "X") {
                        $grid[$y][$x] = ["X", $steps];
                    }
                }
                $y--;
                $steps++;
            }
        }
        if ($direction == "R") {
            $resultDistance = $x + $distance;
            while ($x < $resultDistance) {
                if ($special == true) {
                    if ($grid[$y][$x][0] == "X" || $grid[$y][$x][0] == "!") {
                        $grid[$y][$x][0] = "!";
                        $overlaps[abs($y) + abs($x)] = $steps + $grid[$y][$x][1];
                    } else {
                        $grid[$y][$x][0] = "O";
                    }
                } else {
                    if ($grid[$y[$x]][0] != "X") {
                        $grid[$y][$x] = ["X", $steps];
                    }
                }
                $x++;
                $steps++;
            }
        }
        if ($direction == "L") {
            $resultDistance = $x - $distance;
            while ($x > $resultDistance) {
                if ($special == true) {
                    if ($grid[$y][$x][0] == "X" || $grid[$y][$x][0] == "!") {
                        $grid[$y][$x][0] = "!";
                        $overlaps[abs($y) + abs($x)] = $steps + $grid[$y][$x][1];
                    } else {
                        $grid[$y][$x][0] = "O";
                    }
                } else {
                    if ($grid[$y[$x]][0] != "X") {
                        $grid[$y][$x] = ["X", $steps];
                    }
                }
                $x--;
                $steps++;
            }
        }
    }
    return $grid;
}