<!DOCTYPE html>
<html>
<head>
    <title>Array Functions Demo</title>
</head>
<body>
    <h1>Array Functions Demo</h1>
    <?php
    $array = array(3, 2, 8, 5, 4, 1);

    echo "<p>Original Array: ";
    print_r($array);
    echo "</p>";

    sort($array);
    echo "<p>Sorted Array (Ascending): ";
    print_r($array);
    echo "</p>";

    rsort($array);
    echo "<p>Sorted Array (Descending): ";
    print_r($array);
    echo "</p>";

    $reversedArray = array_reverse($array);
    echo "<p>Reversed Array: ";
    print_r($reversedArray);
    echo "</p>";

    $sum = array_sum($array);
    echo "<p>Sum of Array Elements: $sum</p>";

    $max = max($array);
    echo "<p>Maximum Value: $max</p>";

    $min = min($array);
    echo "<p>Minimum Value: $min</p>";

    $searchValue = 5;
    if (in_array($searchValue, $array)) {
        echo "<p>$searchValue exists in the array.</p>";
    } else {
        echo "<p>$searchValue does not exist in the array.</p>";
    }
    ?>
</body>
</html>
