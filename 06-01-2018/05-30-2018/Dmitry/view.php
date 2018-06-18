<?php
//---------------------------------
//Подключение файлов
//---------------------------------
include_once 'model.php';
include_once 'array.php';
include_once 'page.html';
include_once 'prettyPrint.php';
include_once 'planet.php';
//---------------------------------
//Вивод на єкран
//---------------------------------
function echoPlanet ($arr) {
    if (is_array($arr)) {
      pretty_print ($arr);
    }
    else {
      echo '<pre>';
      var_dump($arr);
      echo '</pre>';
    }
  }
//---------------------------------
