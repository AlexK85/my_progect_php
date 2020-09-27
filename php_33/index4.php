<?php
                // Оператор объединения с null (??) синтаксический сахар

// ПРИМЕР без оператора
    // До версии php 5.6 и ниже
// echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';

// ПРИМЕР с оператором
    // Если в массиве GET есть user, то если его нет (??) то присвоим переменной user строку guest
// echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'quest';



          //Оператор spaceship Космический корабль  
$a = 3;
$b = 2;

// echo $a <=> $b;  // Выведет -1

if (($a <=> $b) === 1) {
  echo '$a > $b';
} elseif (($a <=> $b) === -1) {
  echo '$a < $b';
} else {
  echo '$a = $b';
}

    // Задание констант массивов с помощью define();
// Способ 1

define('DBHOST', 'localhost');
define('DBUSER', 'login');
define('DBPASS', 'password');
define('DBBASE', 'database');

//Способ 2

define('DB', [
  'localhost',
  'login',
  'password',
  'database',
]);

echo '<pre>';
print_r(DB);

      // Групповые декларации use

    
      // Объявление скалярных типов 

// declare(srtict_types=1); // Строга ятипизация
// Принудительный режим
// function sum (int ...$ints)
// {
//     return array_sum($ints);
// }

// var_dump(sum(2, '3', 2.6));



      // Объявления возвращаемых значений

function sum ($a, $b): int {
  return $a + $b;
}
var_dump(sum(2.4, 3));


      // intdiv() — Целочисленное деление
var_dump(intdiv(10, 3));