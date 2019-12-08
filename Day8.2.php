<style>
    div{
        height: 10px;
        width: 10px;
        margin: 0;
    }
    .white{
        float:left;
        background-color: white;
    }
    .black{
        float:left;
        background-color: black;
    }
    .breaker{
        margin-right: auto;
    }
</style>
<?php
include "functions.php";

$complete_array = str_split(file_get_contents("Day8.txt"), 25 * 6);

$current_row = str_split($complete_array[0],1);
foreach($complete_array as $row){
    $row = str_split($row, 1);
    foreach($row as $key => $number){
        if($current_row[$key] >= 2){
            $current_row[$key] = $number;
        }
    }
}
foreach($current_row as $key => $number){
    if($key % 25 == 0){
        echo "<div class='breaker'></div>";
    }
    if($number == 1){
        echo "<div class='white'></div>";
    }
    if($number == 0){
        echo "<div class='black'></div>";
    }
}
?>