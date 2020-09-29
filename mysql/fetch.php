
<?php ## Вывод содержимого таблицы catalogs
  require_once("connect.php");

  $query = "SELECT * FROM catalogs_multi_insert";
  $cat = $pdo->query($query);


  // $catalog = $cat->fetch();
  // echo "<pre>";
  // print_r($catalog);
  // echo "</pre>";

      // Применение fetch(PDO::FETCH_ASSOC) приводит к тому, что в результирующем массиве отсаются только ассоциативные элементы
  $catalog = $cat->fetch(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($catalog);
  echo "</pre>";

  try {
    while($catalog = $cat->fetch())
      echo $catalog['name']."<br />";
      
  } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
  }
?>