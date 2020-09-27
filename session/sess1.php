<?php
  
  session_start();
  define('ADMIN', 'admin'); // Константа

  echo session_id(); 
  

  if (!empty($_POST['login'])) {
    if ($_POST['login'] === ADMIN) {
      $_SESSION['admin'] = ADMIN;
      $_SESSION['res'] = 'Вы успешно авторизовались!'; // Запись вывода ниже перед формой
    } else {
      $_SESSION['res'] = 'Не верный логин!';
    }
    header("Location: sess1.php");  // Делаем РЕДИРЕКТ. Страница будет перезапрошена
    die;
  }

  // Логика: Если у нас что то пришло потом (наш ЛОГИН) мы проверяем: ЕСЛИ НАШ ЛОГИН, КОТОРЫЙ ВВЕЛ ПОЛЬЗОВАТЕЛЬ равен значению КОНСТАНТЫ ADMIN, тогда во-первых создадим сессионную переменную ADMIN, что бы мы могли попасть на страницу secret, далее запишем сообщение об УСПЕХЕ $_SESSION['res'] 
  // Если же условие не вполнится if ($_POST['login'] === ADMIN), то запишем $_SESSION['res'] = 'Не верный логин!';
  // И в любом случае сделаем редирект header("Location: sess1.php"), что бы перезапросить страницу и сбросить данные из формы, что бы не было проблемы F5

?>

<ul>
  <li><a href="sess1.php">sess1</a></li>
  <li><a href="sess2.php">sess2</a></li>
  <li><a href="secret.php">secret</a></li>
  <!-- <li><a href="secret.php">secret</a></li> -->
</ul>

<hr>

<!-- Для вывода $_SESSION['res'] = 'Вы успешно авторизовались!'; -->

<?php
  if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']); // После перезагрузки страницы будет удаляться строка 'Не верный логин!';
  }
?>

<form action="" method="post">
  <input type="text" name="login">
  <button type="submit">Login</button>
</form>
