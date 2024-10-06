<?php
$day = 4;

if ($day >= 1 && $day <= 7) {
    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
    }
} else {
    echo "Invalid input. Please enter a number between 1 and 7.";
}
?>
