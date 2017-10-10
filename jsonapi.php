<?php
$items = array();
for($i = 0; $i < 10; $i++) {
$items[$i] = "this is message $i';
}
header('content-type: application/json');
$jsonoutput = json_encode($items);
echo $jsonoutput;
