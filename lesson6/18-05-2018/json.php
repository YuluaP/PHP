<?php
include ('people.php');

/*
echo "Обычно: ",     json_encode($p), "<br><br><hr>\n";
echo "Теги: ",       json_encode($p, JSON_HEX_TAG), "<br><br><hr>\n";
echo "Апострофы: ",  json_encode($p, JSON_HEX_APOS), "<br><br><hr>\n";
echo "Кавычки: ",    json_encode($p, JSON_HEX_QUOT), "<br><br><hr>\n";
echo "Амперсанды: ", json_encode($p, JSON_HEX_AMP), "<br><br><hr>\n";
echo "Юникод: ",     json_encode($p, JSON_UNESCAPED_UNICODE), "<br><br><hr>\n";
echo "Все: ",        json_encode($p, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "\n\n";
*/

$str = json_encode($p, JSON_UNESCAPED_UNICODE);
echo '<h1> Я подготовил данные к отправке в банк </h1>';
echo $str . "<br><br><hr>\n";

// http://php.net/manual/ru/function.str-replace.php
$toOut = str_replace ('}','} <br>', $str);

//http://php.net/manual/ru/function.openssl-encrypt.php
/*
string openssl_encrypt ( string $data , string $method , string $key [, int $options = 0 [, string $iv = "" [, string &$tag = NULL [, string $aad = "" [, int $tag_length = 16 ]]]]] )
*/

$ciphers             = openssl_get_cipher_methods();
//var_dump ($ciphers);
$method = $ciphers [0];
$pub_key = '12345';
$sendSrt = openssl_encrypt ($str, $method, $pub_key, 0, "qqQWsZXedcaaRFVB");
echo 'Закодированная строка :' . $sendSrt . "<br><br><hr>\n";
echo "<a href='get.php?str=" . $sendSrt . "&method=". $method . "'> передать информацию</a>";
