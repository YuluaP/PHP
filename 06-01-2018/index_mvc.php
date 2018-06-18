<?php
include_once ('modules/ezrastoune/head/init.php');
#include_once ('modules/ninydev/simpleMVC/init.php');
include_once ('modules/ninydev/simpleMenu/init.php');

//echo 'Тут должно быть меню';

echoMenu ();

//echo 'А дальше вывод контроллера';

menuContent ();
?>
<p>Первый параграф</p>
<p>второй параграф</p>

<style>
  li {border: 2px solid;}
  #ui {background: #ccc;}
  #f {background: #c44;}
  .s {color: #00f;}
</style>

<ul id='ui' class='uc'>
<li id='f' class="f" style="padding: 10px; background-color:#0ff">Первый</li>
<li id='s' class="s" style="margin: 10px; background-color:#f0f">Второй </li>
<li id='l' class="s" style="padding: 10px; background-color:#ff0">Тертий</li>
</ul>
