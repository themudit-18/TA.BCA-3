<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number" id="number">
        <input type="submit" value="save">
    </form>

    <?php
    $n = 0;
    $n = $_POST["number"]; 

    $sum = 0;
    $product = 1;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
        $product *= $i;
    }

    echo "<p>Sum of the first $n numbers is: $sum</p>";
    echo "<p>Product of the first $n numbers is: $product</p>";
    ?>
</body>
</html>