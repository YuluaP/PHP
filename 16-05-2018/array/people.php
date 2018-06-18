<?php
/**
 * Работаем с выборками
 * 
 *
 */
include_once ('../lib/personArray.php');
include_once ('../lib/prettyPrint.php');


$tmpPers = createPersonArray (100);

$manyM = 0;
$manyF = 0;

$gb = 0;

for ($i = 0; $i < sizeof($tmpPers); $i++) {
	if ($tmpPers[$i]['sex'] == 'male') {$manyM++;}
	else {$manyF++;}
	
	if ( 	($tmpPers[$i]['sex'] == 'female') &&
			($tmpPers[$i]['colorHair'] == 'русый') &&
			($tmpPers[$i]['colorEye'] == 'голубые') ){
		$gb++;		
		}
}

echo '<h3>Результаты :</h3>';
echo '<ul>';
echo '<li> мужчин ' . $manyM . '</li>' . PHP_EOL;
echo '<li> женщин ' . $manyF . '</li>' . PHP_EOL;
echo '<li> голубоглазых блондинок ' . $gb . '</li>' . PHP_EOL;
echo '</ul>';

echo '<h3>Cортировка пузырьком :</h3>';
$flag = false;
$doCount = 0;
do {
	$flag = false;
	for ($i = 0; $i < sizeof($tmpPers)-1; $i++) {
		if ($tmpPers[$i]['birthYear'] < $tmpPers[$i+1]['birthYear']) {
			echo '.';
			$tmp = $tmpPers[$i];
			$tmpPers[$i] = $tmpPers[$i+1];
			$tmpPers[$i+1] = $tmp;			
			$doCount++; // Счетчик операций	
			$flag = true;
		}
	}

}while ($flag);

echo '<h3>Результаты сортировки :</h3>';
echo '<ul>';
echo '<li> Выполнено сравнений ' . $doCount . '</li>' . PHP_EOL;
echo '</ul>';

pretty_print ($tmpPers);
	






