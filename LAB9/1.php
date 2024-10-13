<?php

function areaOfCircle($radius) {
    return pi() * pow($radius, 2);
}

function areaOfTriangle($base, $height) {
    return 0.5 * $base * $height;
}

function areaOfSquare($side) {
    return pow($side, 2);
}

$radius = 5;
$base = 10;
$height = 8;
$side = 4;

echo "Area of Circle: " . areaOfCircle($radius) . "<br/>";
echo "Area of Triangle: " . areaOfTriangle($base, $height) . "<br/>";
echo "Area of Square: " . areaOfSquare($side) . "<br/>";

?>
