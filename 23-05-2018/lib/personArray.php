<?php
/**
 * Создает массив случайных людей
 * 
 *
 */
// Подключение в сайт
 if (isset($mySite) ){
 $mySite->addToTitle (' Подключена бибилотека работы с людьми'); // Изменить title
 $mySite->addCSSFile ('myCSS.css');
}

$colorHair = array('рыжий', 'русый', 'каштановый', 'черный');
$colorEye = array('голубые', 'серые', 'зеленые', 'карие' );

const YEAR_MIN = 1930;
const YEAR_MAX = 2010;

const GROWTH_MIN = 120;
const GROWTH_MAX = 220;



function createPerson(){
GLOBAL $colorHair, $colorEye;
	
	$res = Array ();

 	$res ['birthYear'] = rand (YEAR_MIN, YEAR_MAX );
 	$res ['birthMonth'] = rand (1, 12);

 	$tmp = rand (0, sizeof($colorHair) - 1);
 	$res ['colorHair'] = $colorHair [$tmp];

 	$tmp = rand (0, sizeof($colorEye) - 1);
 	$res ['colorEye'] = $colorEye [$tmp];

 	if (rand(0,1) == 0 ) { $res['sex'] = 'male'; }
 	else { $res['sex'] = 'female'; }

 	return $res;
 } 



function createPersonArray (int $arraySize = 1) {
	$res = Array ();

	for ($i = 0; $i < $arraySize; $i++) {
		$res [] = createPerson ();
	}

	return $res;
}
