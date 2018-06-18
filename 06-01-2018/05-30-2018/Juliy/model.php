<?php
/**
 * Возможности работы с данными
 */

function createAuto(){
  GLOBAL $bodyType, $engine, $driveUnit, $markAuto;

	$res = Array (); 

  $tmp = rand (0, sizeof($bodyType) - 1);
  $res ['bodyType'] = $bodyType [$tmp];

  $tmp = rand (0, sizeof($engine) - 1);
  $res ['engine'] = $engine [$tmp];

  $tmp = rand (0, sizeof($driveUnit) - 1);
  $res ['driveUnit'] = $driveUnit [$tmp];

  $tmp = rand (0, sizeof($markAuto) - 1);
  $res ['markAuto'] = $markAuto [$tmp];

  return $res;
}
