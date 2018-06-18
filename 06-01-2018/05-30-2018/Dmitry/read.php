<?php

include_once 'model.php';

$readView = createPlanet();

$filename = __DIR__ . 'myData.txt';

// Запись файла
$ptrFile = fopen ($filename, 'w'); 
fwrite ($ptrFile, "$readView");
fclose ($ptrFile);

// Чтение из файла
/*
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
echo '<br />' . ' Что же было в файле :' . $contents;
