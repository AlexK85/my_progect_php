<?php ## Получение заголовков запроса.
  $headers = getallheaders();
  Header("Content-type: text/plain");
  print_r($headers);
?>

<?php ## Распечатка переменных окружения.
  echo '<pre>';
  print_r($_SERVER);
?>