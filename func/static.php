<?php ## Статические переменные.
  function selfcount()
  {
    static $count = 0;
    $count++;
    echo $count;
  }
  for ($i = 0; $i < 5; $i++) selfcount();  // После запуска выведется 12345
?>