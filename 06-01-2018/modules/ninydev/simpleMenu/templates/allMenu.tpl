
<ul>
<?php

foreach ($data as $key => $value) {
   echo '<li>'. $key . ' ' .  $value ['url'] . ' ' .  $value ['text'];
   echo ' редактировать ';
   echo ' удалить ';

   echo '</li>' . PHP_EOL;
}


/*
for ($i = 1; $i < sizeof($data); $i++){
    echo '<li>';
    echo getMenuElement ($data[$i]);
    echo '</li>';
}
*/
?>


</ul>
