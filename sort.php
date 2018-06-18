<?php

for ($i = 0; $i < 5000; $i++){
	$rost [$i] = rand (100,200);
}

$end = true;
$count = 0;
$searchVal = 114;
$countSV = 0;

echo 'Start: <pre>';
//var_dump ($rost);
echo '</pre>';


while ($end) {
	$end = false;
	for ($i = 0; $i < sizeof($rost) - 1; $i++){
		if ($rost [$i] > $rost[$i+1]) {
			$end = true;
			$count++;
			$tmp = $rost[$i];
			$rost [$i] = $rost [$i+1];
			$rost [$i+1] = $tmp;
		}
	}
}

for ($i = 0; $i < sizeof($rost); $i++){
	if ($rost[$i] == $searchVal){
		$countSV++;
	}
	if ($rost[$i] > $searchVal){
		echo 'all find';
		break;
	}
}



echo 'End: <pre>';
//var_dump ($rost);
echo '</pre>';

echo 'operation:' . $count . ' <br />';
echo 'seachVal:' . $searchVal . ' ' . $countSV;
