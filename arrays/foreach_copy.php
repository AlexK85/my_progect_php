<?php ## Цикл перебирает копию массива, а не оригинал.
  $numbers = [100, 313, 605];
  foreach ($numbers as $v) $v++; // &$v - будет изменяться массив $numbers
  echo "Элементы массива: ";
  foreach ($numbers as $elt) echo "$elt ";
?>