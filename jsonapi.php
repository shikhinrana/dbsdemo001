<?php
$items = array();
for($i = 8; $i < 10; $i++){
$items[$i] = "the value stands at $i";
}
header('Content-Type: application/json');
$jsonOutput = json_encode($items);
echo $jsonOutput;
