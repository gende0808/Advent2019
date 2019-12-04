<?php
$candidates = array();
for ($start = 136818; $start < 685979; $start++) {
    $previous_number = null;
    $double = false;
    $increases_only = true;
    $array = array_map('intval', str_split($start));
    foreach ($array as $number) {
        if ($number < $previous_number && $previous_number != null) {
            $increases_only = false;
        }
        if ($previous_number === $number) {
            $double = true;
        }
        $previous_number = $number;
    }
    if ($increases_only == true && $double == true) {
        array_push($candidates, $start);
    }
}

$winners = array();
foreach ($candidates as $candidate) {
    $array = array_map('intval', str_split($candidate));
    $previous_number = null;
    $counter = 1;
    $wins = false;
    foreach ($array as $number) {
        if ($previous_number != null) {
            if ($number == $previous_number) {
                $counter++;
            } else {
                if ($counter == 2) {
                    $wins = true;
                } else{
                    $counter = 1;
                }
            }
        }
        $previous_number = $number;
    }
    if ($counter == 2) {
        $wins = true;
    }
    if ($wins) {
        array_push($winners, $candidate);
    }
}
echo count($winners);