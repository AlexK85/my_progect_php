<?php

function save_mess() {
  $str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s'). "\n***\n";
  file_put_contents('gb.rtf', $str, FILE_APPEND); // Записываем строку в указанный файл
}

function get_mess() {
  return file_get_contents('gb.rtf');
}

function array_mess($messages) {
  $messages = explode("\n***\n", $messages);
  array_pop($messages); // Убирём последний элемент массива
  return array_reverse($messages); // array_reverse() - переводит массив в обратном порядке
}

function get_format_message($message) {
  return explode('|', $message);
}

// Для удобного просмотра массива
function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) . '</pre>';
}