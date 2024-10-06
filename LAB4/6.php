<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 5;
    $isPrime = true;

    if ($number < 2) {
        $is_prime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "$number is a prime number.";
    } else {
        echo "$number is not a prime number.";
    }
    ?>
</body>
</html>