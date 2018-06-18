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

//include ('lib/prettyPrint.php');

$files = scandir('lib/');
for ($i = 2; $i< sizeof ($files); $i++){
  include ('lib/' . $files[$i]);
}

/*
echo '<br />' . ' текущая папка:' . __DIR__ ;
echo '<br />' . ' текущий файл:' . __FILE__ ;
echo '<br />' . ' строка:' . __LINE__ ;

$files = scandir(__DIR__);
pretty_print ($files);

$files = scandir('./');
pretty_print ($files);


$files = scandir('../');
pretty_print ($files);

$files = scandir('../../');
pretty_print ($files);
*/

$files = scandir('lib/');
pretty_print ($files);
