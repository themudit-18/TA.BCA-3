<?php
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = $n; $k >= $n - $i + 1; $k--) {
        echo $k;
    }
    echo "<br>";
}
?>
