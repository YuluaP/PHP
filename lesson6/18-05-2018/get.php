<?php
include ('prettyPrint.php'); // Библиотека вывода массивов
echo '<h2> Банк принял информацию</h2>';
$str = $_GET ['str'];
$method = $_GET ['method'];

//$sendSrt = openssl_encrypt ($str, $method, $pub_key, 0, "qqQWsZXedcaaRFVB");
//http://php.net/manual/ru/function.openssl-decrypt.php
/*
string openssl_decrypt ( string $data , string $method , string $key [, int $options = 0 [, string $iv = "" [, string $tag = "" [, string $aad = "" ]]]] )
*/
$method = 'AES-128-CBC';
echo $method;
$strJS = openssl_decrypt ($str, $method, '12345', 0, 'qqQWsZXedcaaRFVB');

echo str_replace ('}','} <br>', $strJS);

$arr = json_decode ($strJS);

pretty_print ($arr);
