<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 10;

        if ($number > 0) {
            echo $number." is positive";
        }
        elseif ($number < 0) {
            echo $number." is negative";
        }
        else {
            echo $number." is zero";
        }
    ?>
</body>
</html>