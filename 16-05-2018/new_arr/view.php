<?php
/**
 * Вывод данных на экран
 */

function echoPerson ($arr) {
  if (is_array($arr)) {
    pretty_print ($arr);
  }
  else {
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
  }
}
