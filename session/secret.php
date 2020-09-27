<?php

session_start();

if (isset($_GET['do']) && $_GET['do'] == 'exit') unset($_SESSION['admin']); // После этого следующая запись if (!isset($_SESSION['admin'])) die('Вы не авторизаваны!'); не сработает.

// Если у нас существует такой элемент, тогда мы считаем пользователя авторизованным. ИНАЧЕ прекращаем работу.
if (!isset($_SESSION['admin'])) die('Вы не авторизаваны!');

echo "Добро пожаловать!, {$_SESSION['admin']}! "; 

?>

<a href="secret.php?do=exit">Logout</a>

<ul>
  <li><a href="sess1.php">sess1</a></li>
  <li><a href="sess2.php">sess2</a></li>
  <li><a href="secret.php">secret</a></li>
</ul>