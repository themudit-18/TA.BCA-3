<!DOCTYPE html>
<html>
<head>
    <title>Linear Search in Array</title>
</head>
<body>
    <h1>Enter Numbers</h1>
    <form action="" method="post">
        <label for="numbers">Enter numbers (separated by commas):</label>
        <input type="text" id="numbers" name="numbers" required>
        <br><br>
        <label for="search">Enter number to search:</label>
        <input type="number" id="search" name="search" required>
        <br><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = $_POST['numbers'];
    $search = intval($_POST['search']);
    $array = array_map('intval', explode(',', $numbers));
    $found = false;

    foreach ($array as $num) {
        if ($num == $search) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "The number $search is present in the array.";
    } else {
        echo "The number $search is not present in the array.";
    }
}
?>
