<?php
$a = 10;
$b = 10;
$c = 10;


$a = (float)$a;
$b = (float)$b;
$c = (float)$c;

if (!($a + $b > $c && $a + $c > $b && $b + $c > $a)) {
    echo "The lengths entered cannot form a valid triangle.";
    exit;
}

if ($a == $b && $b == $c) {
    echo "The triangle is Equilateral.";
} elseif ($a == $b || $b == $c || $a == $c) {
    echo "The triangle is Isosceles.";
} else {
    echo "The triangle is Scalene.";
}

$sides = [$a, $b, $c];
sort($sides);
if (pow($sides[0], 2) + pow($sides[1], 2) == pow($sides[2], 2)) {
    echo " Additionally, the triangle is Right-Angled.";
}
?>
