<?php

// Что бы не экранировать каждый раз МНОГО данных сделаем функциюБ которая будет это делать автоматически
function clear() {
  global $db;
  foreach($_POST as $key => $value) {
    $_POST[$key] = mysqli_real_escape_string($db, $value);
  }
} 

function save_mess() {
  global $db;
  clear(); // Вызов функции вместо ниже экраннированния данных
  extract($_POST); // Эта функция берёт соотвутствующие ключи и создаёт аналогичные им переменные
  // $name = mysqli_real_escape_string($db, $_POST['name']); // Экранирование
  // $text = mysqli_real_escape_string($db, $_POST['text']);  // Экранирование 
                      // $id = (int)$_POST['id']; // Эта конструкция приводит ЧИСЛОВЫЕ ДАННЫЕ к ЧИСЛОВОМУ ТИПУ
  // Делаем запрос где мы просто будем что - то вставлять в базу данных
  $query = "INSERT INTO gb (name, text) VALUES ('$name', '$text')";
  // Выполняем запрос 
  mysqli_query($db, $query);
}

function get_mess() {
  global $db; // Это соединение с базой данных
  $query = "SELECT * FROM gb ORDER BY id DESC";// Запрос на выборку
  $res = mysqli_query($db, $query); // Выполняем запрос
  return mysqli_fetch_all($res, MYSQLI_ASSOC);// И возвращаем уже готовый ассоциативный массив  

}

// Для удобного просмотра массива
function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) . '</pre>';
}