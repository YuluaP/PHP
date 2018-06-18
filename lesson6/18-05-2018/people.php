<?php

include ('config.php'); // Настройки системы
include ('model.php'); // Работа с данными
include ('view.php'); // Работа с отображением
include ('prettyPrint.php'); // Библиотека вывода массивов


/**
 * Контроль передачи данных
 */

// Создал человека
// $p = createPerson ();
// Отобразил человека
//echoPerson ($p);

//echoPerson (' Я перепутал и передал строку');
$n = 5

for ($i=0; $i<$n; $i++) {
    $p[$i] = createPerson ();
}
echoPerson ($p);
