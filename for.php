<?php ## Демонстрация цикла for
  for ($i = 0, $j = 0, $k = "Points"; $i < 100; $j++, $i += $j) $k = $k.".";
  echo $k; // Points..............
?>

<?php

  $i = 0; $j = 0; $k = "Points";
  while($i < 100) {
    echo '<br>';
    echo $k .= "."; 
    echo '<br>';
    echo $j++;
    echo '<br>';
    echo $i += $j;
  }

?>