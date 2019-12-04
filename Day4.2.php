<?php
$candidates = array();
for ($start = 136818; $start < 685979; $start++) {
    $previous_number = null;
    $double = false;
    $increases_only = true;
    $array = array_map('intval', str_split($start));
    foreach ($array as $number) {
        if ($double == false) {
            if ($number < $previous_number && $previous_number != null) {
                $increases_only = false;
            }
            if ($previous_number === $number) {
                $double = true;
            }
            $previous_number = $number;
        }
    }
    if ($increases_only == true && $double == true) {
        array_push($candidates, $start);
    }
}
echo count($candidates);

function print_array($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";

}