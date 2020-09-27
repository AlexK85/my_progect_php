<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

require_once('connect.php');
require_once('funcs3.php');

// Проверим: ЕСЛИ у нас не пуст массив POST, то вызовем функцию 
 if (!empty($_POST)) {
  // print_arr($_POST); // Распечатаем POST данные 
  // die;
  save_mess();
  header("Location: {$_SERVER['PHP_SELF']}"); // Убираем РЕДИРЕКТ (что бы не нужно было постоянно перезагружать страницу)
  exit;
 }

// Считываем файл
$messages = get_mess();
// $messages = array_mess($messages);

// print_arr($messages); // Выводит массив 

?>
 
 <!-- // ПАРКТИЧЕСКИЙ ПРИМЕР -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Гостевая книга</title>

 <style>
  .message {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
  }
 </style>

</head>
<body>
  
  <form action="index3.php" method="post">

    <p>
      <label for="name">Имя:</label><br>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="name">Текст:</label><br>
      <textarea name="text" id="name" cols="30" rows="10"></textarea>
    </p>
    <button type="submit">Отправить</button>
    

  </form>
  <hr>

<!-- Проверяем: Если у нас не пусто, тогда будем выводить эти сообщения -->
  <?php if (!empty($messages)): ?>
    <?php foreach($messages as $message): ?>
     
      <div class="message">
        <p>Автор: <?=$message['name']?> | Дата: <?=$message['date']?> </p>
        <div><?=nl2br(htmlspecialchars($message['text']))?></div> 
        <!-- nl2br(htmlspecialchars($message[1])) именно такая последовательность, что бы nl2br отработал и не был преобразован в сущности -->
      </div>

    <?php endforeach; ?>
  <?php endif; ?>



    <?php
      // $text = file_get_contents('gb.rtf', );
      // $array_text = explode("\n", $text);
      // foreach($array_text as $message) {
      //   echo "<p>$message</p>";
      // }
    ?>
    
  

</body>
</html>