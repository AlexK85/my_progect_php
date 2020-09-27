<?php

error_reporting(-1);  // функция для вывода всех ошибок

$title = 'hello world';
// $title - 'page title'; 
$fruit = 'apple';
$winnie_pooh = "hello, I'm Winnie. I have 1 {$fruit}s";

// $var = '123';
$Var = '456';


// константа 

// Способ 1 define("НАЗВАНИЕ", "ЗНАЧЕНИЕ"); Принято именовать в верхнем регистре; Регистрозависимы
define("PAGE", "new page");
// define("PAGE", "new page2"); // Перезаписать нельзя константу

// Способ 2 Для работы с КЛАССАМИ. Используется только в НАЧАЛЕ кода.
const PAGE2 = 'new const';

?>
<!-- ------------------------------------------ -->
<?php 
  // $this = '123';  // Это зарезервированная переменная

// ТИПЫ ДАННЫХ

/*
 boolean: true / false  // К регистру не чувствительны
 integer: целое число
 float: дробное число или с плавающей точкой. Должны указывать ТОЧКУ $fl = 1.2
 string
 */
// $var = true;
// echo $var; // true - выведет 1 / false - пустая строка
// var_dump($var);  // Функция узнаёт, что лежит в строке. Служит для отладки кода
// echo gettype($var); // Функция для просмотра типа данных. Редка применяется

$var = 10;
echo $str = 'This is \'string\'. $var'; // Одинарные ковычки. \'string\' - экранирование
$str2 = "This is string. $var"; // Двойные ковычки
var_dump($str2);
 
// HEREDOC - аналог двойных ковычек. Минует экранирование
    // Не должно быть пробелов после HERE и перед HERE не должно быть цифр

$str3 = <<<HERE
"This is "string". $var";
HERE;
echo $str3;

// NOWDOC  - аналог одинарных ковычек. Переменные не обрабатываются. 
 
$str4 = <<<'HERE'
"This is "string". $var";
HERE;
echo $str4;

// Арифметические операторы
/*
$a + $b
$a - $b
$a * $b
$a / $b

"-$a" отрицание (смена знака $a)
"$a % $b" деление по модулю (остаток от деления)
"$a ** $b" возведение в степень
"=" присваивание (установка значения)
"&" присваивание по ссылке

"++$a" префиксный инкремент
"$a++" постфиксный инкремент
"--$a" префиксный декремент
"$a++" постфиксный декремент

"." конкатенация (склеивание строк)

комбинированные операторы
*/

// echo (5 - 2) * 5
// echo 5 / 3
// echo 2 ** 3  // в ранних версиях pow(2, 3)
// echo $a = 5 + 3 // присваивание

/*$a = 5;
$b = $a;
var_dump($a);
$a = 7;
var_dump($a);
var_dump($b);
*/
// выведет int(5) int(7) int(5)

/*
$a = 5;
$b = &$a;
var_dump($a);
$a = 7;
var_dump($a);
var_dump($b);
*/
// выведет int(5) int(7) int(7)

// приведение типов
// echo 5 + '3';  // выведет 8
// echo 5 + '33 test';  // выведет 38
// echo 5 + 't3est';  // выведет 5 + 0

// -----------------------------------------------------

// "++$a" префиксный инкремент
// "$a++" постфиксный инкремент
// "--$a" префиксный декремент
// "$a++" постфиксный декремент

// $a = 5;
// $a = $a + 1; // $a++
// var_dump($a); // выведет 6

// $a = 5;
// var_dump(++$a);
// var_dump($a); // выведет int(6) int(6)

// $a = 5;
// var_dump($a++);
// var_dump($a); // выведет int(5) int(6)

// $a = 5;
// var_dump(--$a);
// var_dump($a); // выведет int(4) int(4)

// $a = 5;
// var_dump($a--);
// var_dump($a); // выведет int(5) int(4)

// --------------------------------------------------
// "." конкатенация (склеивание строк)

// $str1 = 'Hello,';
// $str2 = ' world!';
// $str = $str1 . $str2;
// echo $str;  //  выведет Hello, world!

// $winnie_pooh = "hello, I'm Winnie. I have 1 $fruit" . 's';
// $winnie_pooh = 'hello, I"m Winnie. I have 1 ' . $fruit . 's';

// комбинированные операторы
// $a = 5; 
// $a = $a + 2; // $a += 2;
// var_dump($a);  // выведет 7

// $str1 = 'Hello,';
// echo $str1 .= ' world!'; //выведет Hello, world!

// Вариант 1
// NULL - спец. тип
// var_dump($var); // null

// Вариант 2
// $var = '';
// unset($var); //  функция стирания
// var_dump($var); // null

// Вариант 3
// $var = NULL;
// var_dump($var); // null

// Вариант (не часто встречающийся)
// $var = NULL;
// $var++;
// var_dump($var); // выведет int(1)

//------------------------------------------------

// Условия

$light = 'green';

if ($light == 'green') {
  if (5 > 3) {
      echo '<p>5 > 3</p>';
  }
  echo 'We may go';
} elseif ($light == 'yellow') {
  echo 'We may ready';
} else {
  echo 'We must stop!';
}

?>
<!-- //-------------------- Цыкл While ------------------------------ -->
<?php 
  error_reporting(-1);  // функция для вывода всех ошибок

  // $i = 0;
  // while($i <= 10) {
  //   echo $i++ . '<br>';
  // }




?>


 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!--comment -->
  </head>
  <body>
    <p>Привет, Мир!</p>

      <?php 
        echo '<p>Привет, Мир!</p>'; 
      ?> 

      <?php echo '<p>Привет, Мир 1</p>'; ?> 
      <?php echo '<p>Привет, Мир 2</p>'; ?> 
      <?php print '<p>Привет, Мир 3</p>'; ?> 
      <br> -->
      <!-- Константа обрабатывается без ковычек -->
      <h1><?php echo PAGE; ?></h1>  
      <p><?php echo $winnie_pooh; ?></p>
      <p><?php echo $Var; ?></p> -->


    <!-- // пример с таблицей, нарисованной циклом While  -->
    <?php

      // $i = 1;
      // echo '<table border="1">' . "\n";
      // while($i <= 10) {
      //   echo "\t<tr>\n";
      //   $n = 1;
      //   while($n <= 3) {
      //     echo "\t\t<td>Row $i | Col $n</td>\n"  ;
      //     $n++;
      //   }
      //   echo "\t</tr>\n";
      //   $i++; 
      // }
      // echo '</table>';



    // $year = 1900;
    // echo '<select>' . "\n";
    //     while($year <= 2015) {
    //       echo "<option value='$year'>$year</option>\n";
    //       $year++;
    //     }
    // echo '</select>';


    // В этом примере ничего не выведется
      // $i = 11;
      // while($i <= 10) {
      //   echo $i++ . '<br>';
      // }

    // В этом примере выполнится хотя бы одно условие
      // $i = 11;
      // do{
      //   echo $i++ . '<br>';
      // } while($i <= 10);


      // Таблица умножения

      // $x = 1;
      // echo "<table border = '1'\n";
      //   while($x < 10) {
      //     echo "\t<tr>\n";

      //     $y = 1;
      //     while($y <= 10) {
      //       echo "\t\t<td>$x * $y = " . $x * $y . "</td>\n";
      //       $y++;
      //     }
      //     echo "\t</tr>\n"; 
      //     $x++;
      //   }
      // echo "\t</table>";




    /**
     * МАССИВЫ
     */

     $arr = array('Ivanov', 'Petrov', 'Sidorov');
    // var_dump($arr);  // Даёт детализированную информ. о массиве
    // $arr[] = 'Pupkin'; // Поставит элемент на последнее место в массиве
    $arr[15] = 'Pupkin'; // Поставит элемент в конец массива тоько с 15 ключом. И если ключ будет такой же как и индекс уже у имеющегося элемента - о перезапишет! 

    echo '<pre>'; // Использует форматированный вывод
      print_r($arr); // просто распечатывает элементы без указаний, что там находится: строка или что другое
    echo '</pre>'; // Использует форматированный вывод
      
    // echo $arr[2]; // Выведет последний элемент массива

    $arr2 = [
      1, 
      2,
      [
        'banana',
        'orange',
        'apple'
      ],
      'Cat',
      5, 
      6, 
      7, 
      8, 
      9, 
      10,];

    echo '<pre>';
    print_r($arr2); // Выведет массив на страницу
    echo '</pre>';
    
    echo $arr2[2][2]; // выведет массив в массиве

    $arr3 = [
      2 => 'Ivanov',
      4 => 'Petrov',
      10 => 'Sidorov',
      'Pupkin'
    ];

    echo '<pre>';
    print_r($arr3); // Выведет 'Pupkin' 11 индексом
    echo '</pre>';


    // Разнородные товары принято хранить в асоциативном массиве
    $goods = [
      [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'description'
      ],
      [
        'title' => 'iPad',
        'price' => 200,
        'description' => 'description'
      ],
      [
        'title' => 'Sony',
        'price' => 300,
        'description' => 'description'
      ]
    ];

    /**
     * Функция count()
     */

    // echo count($goods, 1); // рекурсивно посчитан весь масиив
    


    // echo '<pre>';
    // print_r($goods); // Выведет 'Pupkin' 11 индексом
    // echo '</pre>';

    // Ручной вывод
    // echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
    // echo '<br>';
    // echo $goods[1]['title'] . ' - ' . $goods[1]['price'];

    // Циклом перебираем массив 
    // $i = 0;
    // while($i < 3) {
    //   echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'];
    //   echo '<br>';
    //   $i++;
    // }

      $array1 = array("a" => "green", "red", "blue", "red", 2);
      $array2 = array("b" => "green", "yellow", "red");
       /**
        * Функция array_diff() 
        * Функция array_intersect()
        */
      $result = array_diff($array1, $array2); //  сравнивает два или более массива друг с другом и если есть элемент, которого нет во втором массиве, то выведет его
      $result = array_intersect($array1, $array2); // Вычесляет схождение массивов
      

      echo '<pre>';
      echo print_r($result);
      echo '</pre>';


      /**
        * Функция array_key_exists() // Проверяет, присутствует ли в массиве указанный ключ или индекс 
        */
      $search_array = array('first' => 1, 'second' => 4);
      if (array_key_exists('first', $search_array)) {
        echo "Массив содержит элемент 'first' . ";
      } else {
        echo "NO";
      }

      /**
        * Функция array_keys() // Возвращает числовые и строковые ключи, содержащиеся в другом массиве. 
        */
      $result1 = array_keys($goods[0]);

      echo '<pre>';
      echo print_r($result1);
      echo '</pre>';

      /**
        * Функция array_values() // Возвращает числовые и строковые значения, содержащиеся в другом массиве. 
        */
        $result2 = array_values($goods[0]);

        echo '<pre>';
        echo print_r($result2);
        echo '</pre>';


      /**
      * Функция array_marge() // Сливает один или более колличество массивов. 
      */

      $array1 = array("color" => "red", 2, 4);
      $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
      $result3 = array_merge($array1, $array2);
      $result4 = $array1 + $array2;

      echo '<pre>';
      echo print_r($result3); // Второй элемент "color" перезапишет первый. Перезаписывт только строковые ключи; Числовыве добавляюся в конец массива. 
      echo '</pre>';

      echo '<pre>';
      echo print_r($result4); // Ключи из первого массива будут сохранены. Если ключ массива существует в обоих массивах, то будет использован элемент из первого массива, а соответствующий элемент из второго массива будет проигнорирован.
      echo '</pre>';

      /**
      * Функция array_rand() // Выбирает один или несколько случайных ключей из массива. 
      */
      $result5 = array_rand($goods, 2);

      echo '<pre>';
      print_r($result5); // Выведет массив на страницу
      echo '</pre>';


      /**
      * Функция array_reverse() //  Возвращает массив с элементами в обратном порядке
      */
      $result6 = array_reverse($goods); // Если добавить true - то ключи останутся на своих местах

      echo '<pre>';
      print_r($result6); // Выведет массив на страницу
      echo '</pre>';

      /**
      * Функция compact() // Создает массив, содержащий названия переменных и их значения
      */
      $city  = "San Francisco";
      $state = "CA";
      $event = "SIGGRAPH"; 

         // Долгий путь
      // $result7 = [
      //   'city' => $city,
      //   'state' => $state, 
      //   'event' => $event,
      // ];

         // Путь побыстрей  - короче запись
      $result7 = compact('city', 'state', 'event');

      echo '<pre>';
      print_r($result7); // Выведет массив на страницу
      echo '</pre>';

         // extract — Импортирует переменные из массива в текущую таблицу символов. И работает только с ассоциативными массивами
      $result8 = [
        'city' => 'SF',
        'state' => 'CA', 
        'event' => 'do',
      ];

      extract($result8);
      echo $state;
      echo '<br>';
      // arsort — Сортирует массив в обратном порядке, сохраняя ключи
      // asort — Сортирует массив, сохраняя ключи
      // sort — Сортирует массив
      // rsort — Сортирует массив

      // array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений
      // array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
      // array_shift — Извлекает первый элемент массива
      // array_unique — Убирает повторяющиеся значения из массива
      // array_unshift — Добавляет один или несколько элементов в начало массива
      // array_flip — Меняет местами ключи с их значениями в массиве
      // array_pop — Извлекает последний элемент массива
      // array_push — Добавляет один или несколько элементов в конец массива
      // in_array — Проверяет, присутствует ли в массиве значение
      // list — Присваивает переменным из списка значения подобно массиву


      // ------------------------------------------------------
        // TODO add 1 element to array
      $arr4 = ['Ivanov', 'Petrov', 'Sidorov'];
      // $arr4[3] = 'Petrov'; // Добавит значение в конец массива, а если индекс будет как у одного из элементом массива, то перезапишет
      $arr4[5] = 'Petrov'; // Так автоматически добавится элемент в конец массива
      $arr4[] = 'Doe';
      print_r($arr4);

      // Цикл while
      // $i = 1;

      // while($i < 11) {
      //   echo $i . '<br>';
      //   $i++;
      // }

      // Цикл for 
      // for($i = 1; $i < 11; $i++) {
      //   echo $i . "<br>";
      // }

      // for($i = 0; $i < count($arr4); $i++) {
      //   echo $arr4[$i] . "<br>";
      // }

        // Цикл foreach - выводит все элементы массива и ассоциативные массивы ТОЖЕ
      // foreach($arr4 as $item) {
      //   echo $item . '<br>';
      // }

      $names = [
        'Ivan' => 'Ivanov',
        'Petr' => 'Petrov',
        'Sidor' => 'Sidorov'
      ];

      echo '<pre>';
      print_r($names);
      echo '</pre>';

        // Выведет все значения ключей в массиве
      // foreach($names as $name) {
      //   echo $name . '<br>';
      // }

        // Выведет и ключи и значения 
      foreach($names as $name => $surname) {
        echo "Name: $name, Surname: $surname <br>";
      }

      foreach($arr4 as $k => $v) {
        echo "Key: $k, Name: $v <br>";
      }
      // если распечатаем 
      // echo '<pre>';
      // print_r($arr4);
      // echo '</pre>';


          // Оператор break;
      for($i = 0; $i <= 30; $i++) {
        echo $i . "<br>";
        if ($i == 5) {
          echo '<h1>Found!!!</h1>';
          break;
        }
      }

          // Хотим выводить все цифры, но не хотим выводить 10 
          // Оператор continue
      // for($i = 0; $i <= 30; $i++) {
      //   if ($i == 10 || $i == 20) {
      //     continue;
      //   } 
      //   echo $i . '<br>';
      // }
          // Зададим диапазон
      for($i = 0; $i <= 30; $i++) {
          if ($i >= 10 && $i <= 20) {   // если будет оператор || тогда ничего не вернётся 
            continue;
          } 
          echo $i . '<br>';
        }


        // Конструкция switch
      $var = 1;
      switch($var) {
        case 1: 
          echo 'Variable = 1';
          break;
        case 2: 
          echo 'Variable = 2';
          break;  
        case 3: 
          echo 'Variable = 3';
          break;
        default: 
          echo 'Something else...';
      }
        

        // Альтернативный синтаксис управляющих структур
      $bool = true;
      $str5 = 1;
      $str6 = 22;
      $str7 = 3;

      var_dump($bool);
      var_dump(1);

          // Это не совсем удобная конструкция
      // if ($bool) {
      //   echo '<table class="table" border="1">
      //           <tr>
      //             <td>' . $str5 . '</td>
      //             <td>' . $str6 . '</td>
      //             <td>' . $str7 . '</td>
      //           </tr>
      //         </table>';
      // }
    ?>

    <?php if ($bool): ?>
      <table class="table" border="1">
           <tr>
             <td><?php echo $str5 ?></td>
             <td><?php echo $str6 ?></td>
             <td><?php echo $str7 ?></td>
           </tr>
         </table>
    <?php endif; ?>


    <?php foreach($names as $name => $surname): ?>
        Name: <?php  echo $name ?>, Surname: <?php echo $surname ?> <br>
    <?php endforeach; ?>

        <!-- Выведется -->
        <!--  Name: Ivan, Surname: Ivanov
        Name: Petr, Surname: Petrov
        Name: Sidor, Surname: Sidorov -->

    <?php error_reporting(-1);
    
      // $nums = [1, 2, 3];
      // $names = ['Ivanov', 'Petrov'];
      // echo count($nums);  // Выведет 3 
      // echo count($names);  // Выведет 2


      // ====================================================
          // Функции, определяемые пользователем
    
      // function sum() {
      //   echo 5 + 7;
      //   echo '<br>';
      // }
      // sum();

          //Функция с параметрами
      require_once 'funcs.php';  // Подключение файла

      // $a = 200;

      // $x = 100;
      // $y = 10;

      // sum(5,7);  // 307
      // sum(10,5);  // 305
      // sum(5,10);  // 310
      // sum($x,$y); // 310
      // sum(); // 302    // Если не передаём параметры функции, то будут использованы параметры по умолчанию

      // echo $a;  // 200

        // $a = 5;
        // $b = 10;

        // echo $a; // выведет 5
        // echo '<br>';
        // sum($a, $b); // выведет 15
        // echo $a; // выведет 100

      // echo sum(1,2); // выведет 3 
      // echo 5 + sum(1,2); // выведет 8




      $nums = [1, 2, 3];
      $names = ['Ivanov', 'Petrov'];
      $names2 = ['Ivan' =>'Ivanov', 'Petr' => 'Petrov'];
      $test = [];

      $keys = array_keys($nums);
      echo '<pre>';
      print_r($keys);
      echo '<pre>';

      // вернём результат работы функции my_array_keys() 
      $keys2 = my_array_keys($nums);
      // echo '<pre>';
      print_r($keys2);
      // echo '<pre>';

      // Выведет ключи в массиве $names
      $keys3 = my_array_keys($names);
      print_r($keys3);

      // Выведет ключи в массиве $names2
      $keys4 = my_array_keys($names2);
      print_r($keys4);

      // Попробуем вывести пустой массив $test
      $keys5 = my_array_keys($test);
      print_r($keys5);


    // ====================================================
    
        // explode — Разбивает строку с помощью разделителя

          // header('Content-type: text/html; charset=utf-8');  // Что бы не было преблем с кодировкой
    
      // $str8 = 'Иванов Иван Иванович';
      // $data = explode(' ', $str8);
      // print_r($data);



        // implode — Объединяет элементы массива в строку
      
      // $data = ['Иванов', 'Иван', 'Иванович'];
      // echo $str8 = implode(', ', $data);



        // trim — Удаляет пробелы (или другие символы) из начала и конца строки

      // $str8 = "<p>Hello</p>";
      // $str8 .= "<p>world!</p>";
        //  echo $str8;
      // echo trim($str8, "\t"); // К примеру для авторизации пользователяю



        // nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки

      // $str8 = "hello\nworld!\n";
      // echo nl2br($str8);

        // str_replace — Заменяет все вхождения строки поиска на строку замены
      
      // $str8 = '[i]Привет[/i]! Меня зовут [B]Вася![/b]';

      // $str8 = str_replace('[b]', '<b>', $str8);
      // $str8 = str_replace('[/b]', '</b>', $str8);

      // $search = ['[b]', '[/b]', '[i]', '[/i]'];
      // $replace = ['<b>', '</b>', '<i>', '</i>'];
      // $str8 = str_replace($search, $replace, $str8);

        // str_ireplace — Регистронезависимый вариант функции str_replace()

      // $str8 = str_ireplace($search, $replace, $str8);
      // echo $str8;

        // strip_tags — Удаляет теги HTML и PHP из строки
      // $str8 = '<i>Привет</i>! Меня зовут <b>Вася</b>! <script>alert("XSS")</script>';
      // echo strip_tags($str8, '<b><i>');  // Теги <b><i> не вырежутся

        // strlen — Возвращает длину строки
      // $str8 = 'hello';
      // $str8 = 'Привет!';   // выведет 12 - это значит с кирилицей выведет 12 байт
      // echo strlen($str8); 
      // echo mb_strlen($str8, 'UTF-8');

    
        // mb_stripos — Регистронезависимый поиск позиции первого вхождения одной строки в другую
      // $str8 = 'Привет, мир!';
     
      // echo mb_stripos($str8, 'и', 4, 'utf-8');
              // Чаще всего используется в условиях
      // if (mb_stripos($str8, '.', 0, 'utf-8')) {
      //   echo 'YES';
      // } else {
      //   echo 'NO';
      // }

        // mb_strtoupper — Приведение строки к верхнему регистру
      // $str8 = 'Привет, мир!';
      // $str9 = 'ПРИВЕТ, МИР!';
      //   echo mb_strtoupper($str8, 'utf-8');

        // mb_strtolower — Приведение строки к нижнему регистру
      //   echo mb_strtolower($str9, 'utf-8');

        // mb_substr — Возвращает часть строки
      // $str8 = 'Привет, мир!';
      // echo mb_substr($str8, 0, 6, 'utf-8'); // Выведет Привет

      // echo mb_substr($str8, -4, 3, 'utf-8'); // Выведет мир, только при помощи отрицательных символов
        
        // htmlspecialchars — Преобразует специальные символы в HTML-сущности 
      // $str8 = '&amp;<h1><i>Привет</i>, меня зовут <b></b>Вася</b></h1><script>alert(\'XSS\')</script>';
      // echo htmlspecialchars($str8, ENT_QUOTES, 'utf-8', false); //ENT_QUOTES - преобразует ВСЕ ковычки 

        // htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы
        // htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
      // $str8 = '&amp;amp;&lt;h1&gt;&lt;i&gt;Привет&lt;/i&gt;, меня зовут &lt;b&gt;&lt;/b&gt;Вася&lt;/b&gt;&lt;/h1&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
      // echo htmlspecialchars_decode($str8);

  // ====================================================
        

        // date_default_timezone_get — Возвращает временную зону, используемой по умолчанию всеми функциями даты/времени в скрипте
      // echo date_default_timezone_get();

      // echo '<br>';
        
        // date_default_timezone_set — Устанавливает временную зону по умолчанию для всех функций даты/времени в скрипте
      // echo  date_default_timezone_set('America/Vancouver');

      // echo date_default_timezone_get();

        // date — Форматирует вывод системной даты/времени
      // echo '<br>';

          // time — Возвращает текущую метку системного времени Unix
      // date_default_timezone_set('GMT'); 
      // echo date('Y-m-d H:i:s', time() + 60 * 60 * 24 * 10); // Прибавил 10 дней
      // echo time();

      echo '<br>';

      // Для того, что бы не выводить вручную дату создания сайта и по сей день
    // echo '2010 - ' . date('Y');
    
      // phpinfo();
    
        // getdate — Возвращает информацию о дате/времени
      // $date = getdate();
      // print_r($date);
      // echo $date['year']; // Выведет нынешний год

          // strtotime — Преобразует текстовое представление даты на английском языке в метку времени Unix
        // echo date('Y-m-d H:i:s');
        // echo '<br>';
        // echo date('Y-m-d H:i:s', strtotime("+1 day 2 hours"));

          // mktime — Возвращает метку времени Unix для заданной даты
        // echo time();
        // echo '<br>';
        // echo mktime( date("H"), date("i")+1, date("s"), date("m"), date("d"), date("Y") ); // прибавится 60 мин

        // $t = mktime( date("H"), date("i")+1, date("s"), date("m"), date("d"), date("Y") + 1 );
        // echo date('Y-m-d H:i:s', $t); // Прибавится Один год
      

    // ==================================================== класс DateTime

        // date_create — Псевдоним DateTime::__construct()
      // $date = date_create(date('Y-m-d H:i:s'));
      // print_r($date);

        // date_format — Псевдоним DateTime::format()
      // echo date_format($date, 'Y-m-d H:i:s'); 

         // date_interval_create_from_date_string — Псевдоним DateInterval::createFromDateString()
      // date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));
      // echo '<br>';
      // echo date_format($date, 'Y-m-d H:i:s'); 


          // microtime — Возвращает текущую метку времени Unix с микросекундами
      //  echo time();
      //  echo '<br>';
      //  echo microtime();
      // var_dump(microtime()); // выведет string(21) "0.19928000 1598467295"
      // var_dump(microtime(true));  // выведет float(1598467431.7554)

      $start = microtime(true);
        // usleep — Задержка выполнения в микросекундах
      // usleep(1000000);

                  // Хотим посчитать сколько у нас займёт время перебор счётчика от 1 до 1000
          // for ($i = 1; $i <= 1000000000; $i++) {
          //   if ($i == 1000000000) echo '<p>Отсчёт завершён</p>';
          // }
           
      // $end = microtime(true);
      // echo $end - $start;
  
       
        // echo '<pre>';
        // print_r($_SERVER);
        // echo '</pre>';

                    // ===================================  СУПЕР ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ
        // echo $_SERVER['PHP_SELF']; 
        // echo $_SERVER['SERVER_NAME'];

        // echo $_SERVER['QUERY_STRING'];   // Строка запроса, если есть, через которую была открыта страница. Всё что попадает в строку запроса через ? вернётся на странице

        // echo $_SERVER['DOCUMENT_ROOT'];  // Директория корня документов, в которой выполняется текущий скрипт, в точности та, которая указана в конфигурационном файле сервера.

        // echo $_SERVER['HTTP_HOST']; // Содержимое заголовка Host: из текущего запроса, если он есть.

        // echo $_SERVER['HTTP_REFERER']; // Адрес страницы (если есть), с которой браузер пользователя перешёл на эту страницу. Этот заголовок устанавливается браузером пользователя. Не все браузеры устанавливают его, а некоторые в качестве дополнительной возможности позволяют изменять содержимое заголовка HTTP_REFERER. Одним словом, нельзя доверять этому заголовку.

        // echo $_SERVER['REMOTE_ADDR']; // IP-адрес, с которого пользователь просматривает текущую страницу.

        


        if (isset($_POST['send'])) {
          echo '<pre>';
          print_r($_POST);
          echo '</pre>';
        }
        
        if (!empty($_FILES)) {
          echo '<pre>';
          print_r($_FILES);
          echo '</pre>';
          move_uploaded_file($_FILES['file']['tmp_name'], '/Users/alexandrkurganskiy/.bitnami/stackman/machines/xampp/volumes/root/htdocs/my_progect_php/upload/'  . $_FILES['file']['name']);
        }
    ?>

         <!-- ==================================================== ПЕРЕДАЧА ДАННЫХ -->

                              <!-- Уже открыто выше  -->
          <!-- <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
          </head>
          <body> -->
            
        <form method="post" action="" enctype="multipart/form-data">
            <input type="text" name="name">

            <textarea name="text"></textarea>
    
            <input type="checkbox" name="remember">
          <p>
            <select name="lang[]" multiple="">
              <option value="eng">English</option>
              <option value="ru">Russian</option>
              <option value="jp">Japan</option>
            </select>
          </p>
          <p>
            <input type="file" name="file">
          </p>
          <p>
            <button type="submit" name="send" value="test">Send</button>
          </p>
        </form>
        <hr>

        <p>Введённое имя: <?php if (!empty($_POST['name'])) echo $_POST['name']; else echo 'форма не отправлена!' ?></p>
        
        <?php //условие ? да : нет ?>

        <p>Введённое имя: <?php  echo !empty($_POST['text']) ? nl2br($_POST['text']) : 'форма не отправлена' ?></p>


          <!-- </body>
          </html> -->
  </body>
</html>


<?php

// session_start();
// $_SESSION['test'] = 123;
// var_dump($_SESSION);
 
?>
 


 <!-- ==================================================== ФУНКЦИИ ФАЙЛОВОЙ СИСТЕМЫ -->


 <?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

      // Копирует файл
// copy('text.txt', 'folder/file.txt');

      // file_exists — Проверяет существование указанного файла или каталога
// if (file_exists('index.php'))  echo 'Файл существует';
// else echo 'Такого файла нет';


      // file_get_contents — Читает содержимое файла в строку
// echo $file = file_get_contents('text.txt');
// $file = file_get_contents('https://www.php.net/');
// echo htmlspecialchars($file);

// $file = file_get_contents('http://php.net/');

      // file_put_contents — Пишет данные в файл 

      // file — Читает содержимое файла и помещает его в массив
          // FILE_IGNORE_NEW_LINES - (Константа) Пропускать новую строку в конце каждого элемента массива
          // FILE_SKIP_EMPTY_LINES - (Константа) Пропускать пустые строки
// $file = file('folder/textEdit', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
// print_r($file);


      // is_dir — Определяет, является ли имя файла директорией
      // Если папка? То выведет 'Это каталог'
// if (is_dir('folder')) echo 'Это каталог';
// else echo 'Это не каталог';

      // is_file — Определяет, является ли файл обычным файлом
// if (is_file('folder/textEdit')) echo 'Это файл';
// else echo 'Это не файл'; 

// ================================================= Не удалось отобразить на - не сработало 

      // move_uploaded_file — Перемещает загруженный файл в новое место
      
      // rename — Переименовывает файл или директорию
// rename('folder/textEdit', 'folder/textEdit2');

      // mkdir — Создаёт директорию
// mkdir('folder/2', 0777, true);  

      // rmdir — Удаляет директорию

      // touch — Устанавливает время доступа и модификации файла
// touch('folder/textEdit', time()-3600*24);

      // unlink — Удаляет файл
// unlink('test.php');

?>
