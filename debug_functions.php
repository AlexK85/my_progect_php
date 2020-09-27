<?php ## пример работы функции print_r();

  $a = array('a'=>'apple', 'b'=>'banana', 'c'=>array('x', 'y', 'z'));
  echo '<pre>';
  print_r($a);
  echo '</pre>';

?>

<?php ## var_dump() функция печатает и информацию о типах

  $a2 = array(1, array('a', 'b'));
  echo '<pre>';
  var_dump($a2);
  echo '</pre>';

?>

<?php ## var_export() похожа на print_r(), но выводит значение переменной так, что оно может быть использовано прямо как "кусок" PHP-программы

  class SomeClass
  {
    private $x = 100;
  }

  $a3 = array(1, array("Programs hacking programs. Why?", "Д'Артаньян"));
  echo '<pre>';
  var_export($a3);
  echo '</pre>';

  $obj = new SomeClass();
  echo '<pre>';
  var_export($obj);
  echo '</pre>';

?>

