<?php
echo "<pre>";
<table >
$num = 1;
for ($i = 1; $i <= 12; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . "&nbsp;";
        $num++;
        if ($j == $i) {
            echo "&nbsp;";
            echo "<br/>";
        }
    }
}
<table/>
echo "</pre>";
?>
