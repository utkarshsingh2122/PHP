<?php
  for($a=1;$a<=10;$a++){
    if($a==3){
      goto abc;
    }
    echo $a,"<br>";
  }
  abc:
  echo "Hello this is new code .";
 ?>
