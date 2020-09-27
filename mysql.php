<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

// Для удобного просмотра массива
function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) . '</pre>';
}
// =================================================  

    // mysqli_connect() -  Открывает соединение с сервером MySQL
    // mysqli_connect_error() - Возвращает строковое описание последней ошибки подключения
    // mysqli_set_charset - устанавливает кодировку
$db = @mysqli_connect('localhost', 'root', '', 'gb') or die('Ошибка соединения с БД');
if (!$db) die(mysqli_connect_error());

mysqli_set_charset($db, "utf8") or die('Не установлена кодировка');

$str = "d'Artanian";

    // mysqli_query — Выполняет запрос к базе данных. Возвращает FALSE в случае неудачи. В случае успешного выполнени запросов SELECT mysqli_query() вернёт объект mysqli_result(). Для остальных успешных запросов вернёт TRUE.
// $insert = "INSERT INTO gb (name, text) VALUES ('Вова', 'Не поймал сегодня щуку')"; // echo  Способ 2 что бы вывести
// $res_insert = mysqli_query($db, $insert);

// if ($res_insert) echo 'OK';
// else echo 'Error';

     // mysql_error — Возвращает текст ошибки последней операции с MySQL
// echo mysqli_error($db); //Способ 1 что бы вывести
// var_dump($db); 

// $update = "UPDATE gb SET text = CONCAT(text, '|||') WHERE id > 4";
// $res_update = mysqli_query($db, $update) or die(mysqli_error($db)); 

// $delete = "DELETE FROM gb WHERE id > 4";
// $res_delete = mysqli_query($db, $delete) or die(mysqli_error($db));
// echo mysqli_affected_rows($db); // Возвращает колличество рядов, которые затронули этим запросом. Если ничего не нащёл - 0, если есть ошибка - -1, если всё корректно указано - 1


    // mysqli_real_escape_string() - Экранирует специальные символы в строке для использования в операторе SQL с учетом текущей кодировки соединения.
$str = mysqli_real_escape_string($db, $str);
$query = "INSERT INTO gb (name, text) VALUES ('$str', 'Имя с апострофом')";
mysqli_query($db, $query) or die(mysqli_error($db));


// $res = mysqli_query($db, "SELECT * FROM gb"); // Выведет все поля если * 
$res = mysqli_query($db, "SELECT id, name, text, date FROM gb ORDER BY id DESC"); // ВЫБОРКА Выведет поля только с ...name, text.... , Хотим сортировать в обратном порядке? - ORDER BY id DESC

    // mysqli_num_rows() — Получает число рядов в результирующей выборке
// echo mysqli_num_rows($res); // Если поставить LIMIT 2 в выборку, то выведет два элемента
// var_dump($res);

                          // Пример 1 получения доступа к данным и формирование из них массивов

        // mysqli_fetch_all(); - выбирает все строки из результирующего набота и помещает их в ассоциативный массив, обычный массив или в оба.
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);  // MYSQLI_ASSOC позволяет получить вместо нумерованного, ассоциативный массив
// print_arr($data);

                          // Пример 2 получения доступа к данным и формирование из них массивов

        // mysqli_fetch_assoc() - получает тольо одну текущую строку данных и при этом можно сделать массив самостоятельно 
// $data2 = [];
// while($row = mysqli_fetch_assoc($res)) {  
//   $data2[$row['id']] = $row;
// }

// print_arr($data2);

   // Пройдёмся циклом по массиву $data 
// foreach($data2 as $index) {
//   echo "Name: {$index['name']} <br>";
//   echo "Text: {$index['text']} <br>";
//   echo "Date: {$index['date']} <br>";
//   echo '<hr>';
// }


    
