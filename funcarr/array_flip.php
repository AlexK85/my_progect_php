<?php ## Обращение массива.
  $names = [
      "Joel"   => "Silver", 
      "Grant"  => "Hill", 
      "Andrew" => "Mason",
    ];
  $names = array_flip($names);
  echo '<pre>'; print_r($names);
  // Array([Silver]=>Joel  [Hill]=>Grant  [Mason]=>Andrew)
?>