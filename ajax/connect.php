<?php ## Соединение с базой данных
  // try {
  //   $pdo = new PDO(
  //     'mysql:host=localhost;dbname=users',
  //     'root',
  //     '',
  //     [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  // }
  // catch (PDOException $e) {
  //   echo "Невозможно установить соединение с базой данных";
  // }
?>

<?php ## Соединение с базой данных
  // try {
  //   $pdo = new PDO(
  //     'mysql:host=localhost;dbname=comments',
  //     'root',
  //     '',
  //     [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  // }
  // catch (PDOException $e) {
  //   echo "Невозможно установить соединение с базой данных";
  // }
?>

<?php ## Соединение с базой данных
  try {
    $pdo = new PDO(
      'mysql:host=localhost;dbname=catalogs_ajax',
      'root',
      '',
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
  catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
  }
?>