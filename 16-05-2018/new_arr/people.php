<?php

include ('config.php'); // Настройки системы
include ('model.php'); // Работа с данными
include ('view.php'); // Работа с отображением
include ('../lib/prettyPrint.php'); // Библиотека вывода массивов


/**
 * Контроль передачи данных
 */

// Создал человека
$p = createPerson ();
// Отобразил человека
echoPerson ($p);

echoPerson (' Я перепутал и передал строку');


for ($i=1; $i<5; $i++) {
    $p[$i] = createPerson ();
}
echoPerson ($p);
