<?php
/**
 * Files & catalog
 * manual:
 * http://php.net/manual/ru/ref.dir.php
 * http://php.net/manual/ru/ref.filesystem.php
 *
 * sample:
 * https://metanit.com/web/php/5.1.php
 */

// До изучения автолоада классов
// Подключаем библиотеки таким образом
 $files = scandir('lib/');
 for ($i = 2; $i< sizeof ($files); $i++){
   include ('lib/' . $files[$i]);
 }

 // $df содержит размер свободного места в каталоге "/"
 $df = disk_free_space(__DIR__);
 echo ' Free disk space ' . $df;

// Изучаем свойства файлов
//$grID = filegroup (__FILE__);

/*
$filename = 'testChmod.txt';
$grID = filegroup ($filename);
echo '<br />' . ' Номер группы:' . $grID;
$grArray = posix_getgrgid ( $grID );
pretty_print ($grArray);

$fPrm = fileperms ( $filename );
echo '<br />' . ' Права на файл, как сказал сервер:' . $fPrm;
echo '<br />' . ' Права на файл, расшифровка:' . decodePermsToStr ($fPrm);

pretty_print ( stat ($filename));
*/

$filename = __DIR__ . '/myData.info';

// Запись файла
$ptrFile = fopen ($filename, 'w'); // Write to File
echo '<br />' . ' Ресурсовая переменная :' . $ptrFile;
fwrite ($ptrFile, 'Hello Word!');
fclose ($ptrFile);

// Чтение из файла
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
echo '<br />' . ' Что же было в файле :' . $contents;






$filename = __DIR__ . '/myCount.info';

// Чтение из файла количества просомтров страницы
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$contents = $contents + 1;

echo '<br />' . ' Эту страницу смотрели :' . $contents;

// Запись в файл количество просомтров страницы
$ptrFile = fopen ($filename, 'w'); // Write to File
fwrite ($ptrFile, $contents );
fclose ($ptrFile);
