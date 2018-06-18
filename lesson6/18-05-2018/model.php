<?php
/**
 * Возможности работы с данными
 */

function createPerson(){
  GLOBAL $colorHair, $colorEye;

	$res = Array (); // Результат нашего человека

  $res ['weight'] = rand (WEIGHT_MIN, WEIGHT_MAX );
  $res ['growth'] = rand (GROWTH_MIN, GROWTH_MAX );

  $res ['year'] = rand (YEAR_MIN, YEAR_MAX );

  $tmp = rand (0, sizeof($colorHair) - 1);
  $res ['colorHair'] = $colorHair [$tmp];

  $tmp = rand (0, sizeof($colorEye) - 1);
  $tmpEye [] = $colorEye [$tmp];
  $tmp = rand (0, sizeof($colorEye) - 1);
  $tmpEye [] = $colorEye [$tmp];

  if ($tmpEye [0] == $tmpEye [1]) {
    $res ['colorEye'] = $tmpEye [0];
  } else {
    $res ['colorEye'] = $tmpEye;
  }



  if (rand(0,1) == 0 ) { $res['sex'] = 'male'; }
 	else { $res['sex'] = 'female'; }

  return $res;
}
