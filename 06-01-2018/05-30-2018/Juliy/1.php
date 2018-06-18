<?php

include ('config.php'); // Настройки системы
include ('model.php'); // Работа с данными
include ('view.php'); // Работа с отображением
include ('prettyPrint.php'); // Библиотека вывода массивов

$filename = __DIR__ . '/myUniverse.info';
$a=1;
while ($a <= 2) {
    if (isset($str)) {
        echo "Проверяю существование Вселенной <br/>" . PHP_EOL;
        // Чтение из файла
        $openFile = fopen($filename, "r");

        if ($openFile) {
          die (' Не могу открыть файл');
        }

        $readFile = fread($openFile, filesize($filename));
        fclose($openFile);
        // Декодирование строки в массив
        $arrayAJS = json_decode($readFile);
        pretty_print($arrayAJS);
        // Удаление файла
        unlink($filename);
        echo 'Вселенная удалена <br/>' . PHP_EOL;
    }
    else {
        // Создание массива
        echo "Создаю Вселенную <br/>" . PHP_EOL;
        $n = $_POST['size'];
        for ($i=0; $i<$n; $i++) {
            $arrayA[$i] = createAuto();
        }
        // Кодирование массива в строку
        $str = json_encode($arrayA, JSON_UNESCAPED_UNICODE);
        // Запись в файл
        $writeFile = fopen ($filename, 'w');

        if (!$writeFile) {
          die (' Не могу открыть файл');
        }


        fwrite ($writeFile, $str);
        echo 'Вселенная записана <br/>' . PHP_EOL;
        // Закрытие файла
        fclose ($writeFile);
    }
    $a++;
}
