<?php
$n = 3;

for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = $n-1; $i >= 1; $i--) {
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>
