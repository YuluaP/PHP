<?php

$person = array(
	'name' => 'Alexander',
	'sex' => 'm',
	'dog' => array (
		'bloxi' =>true
	)
);

echo '<pre>';
var_dump ($person);
echo '</pre>';

$person1 = array(
	'name' => 'Julia',
	'sex' => 'f',
	'dog' => true

);

$people [0] = $person;
$people [1] = $person1;

$myBloxa = $people[0]['dog']['bloxi'];


echo '<pre>';
var_dump ($people);
var_dump ($myBloxa);
echo '</pre>';
