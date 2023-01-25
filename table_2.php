<?php{
  $value = 1;
  for($i = 1; $i <= $40; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$value ";
      $value++;
    }
    echo "\n";
  }
}
?>
