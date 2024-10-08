<?php
$start = 10;
$end = 99;

echo "Armstrong numbers between $start and $end are: <br>";

for ($i = $start; $i <= $end; $i++) {
    $num = $i;
    $sum = 0;
    $n = strlen((string)$num);

    while ($num != 0) {
        $digit = $num % 10;
        $sum += pow($digit, $n);
        $num = intval($num / 10);
    }

    if ($sum == $i) {
        echo $i . " ";
    }
}
?>
