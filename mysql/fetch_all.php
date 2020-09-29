<?php ## Использование метода fetchAll
  require_once("connect.php");

  try {
    $query = "SELECT * FROM catalogs_multi_insert";
    $cat = $pdo->query($query);

    // $catalog = $cat->fetchAll();
  // echo "<pre>";
  // print_r($catalog);
  // echo "</pre>";

      // Применение fetchAll(PDO::FETCH_ASSOC) приводит к тому, что в результирующем массиве отсаются только ассоциативные элементы
  $catalog = $cat->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($catalog);
  echo "</pre>";
  
    $catalogs = $cat->fetchAll();
    foreach($catalogs as $catalog)
      echo $catalog['name']."<br />";
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>