<!-- Навязчивые предупреждения -->

<form action="disable_warnings.php">
  <input type="submit" name="doGo" value="Click!">
</form>

<?php

  // В массиве $_REQUEST всегда содержаться пришедшие из формы данные.
  if (@$_REQUEST['doGo']) echo "Вы нажали кнопку!"; // @ - нужен для временной блокировки ошибок! 

?>