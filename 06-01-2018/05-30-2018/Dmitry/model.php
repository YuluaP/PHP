<?php
//---------------------------------
//Подключение файлов
//---------------------------------
include_once 'array.php';
//---------------------------------
//Функция создания планеты
//---------------------------------
function creatPlanet (){
GLOBAL $crPeople, $crFauna;

$res = Array ();

$res ['Океанов'] = rand(hmOcean_MIN, hmOcean_MAX);
$res ['Материков'] = rand (hmMainLand_MIN, hmMainLand_MAX );
$res ['Сколько лет планете?'] = rand (hmYears_MIN, hmYears_MAX );

$tmp = rand (0, sizeof($crPeople) - 1);
$res ['Прегодная ли для жизни?'] = $crPeople [$tmp];

$tmp1 = rand (0, sizeof($crFauna) - 1);
$res ['Есть ли живые существа?'] = $crFauna [$tmp1];

if ($res ['Прегодная ли для жизни?'] == $crPeople[1]){
    $res ['Есть ли живые существа?'] = $crFauna [1];
}
return $res;
}
//---------------------------------
