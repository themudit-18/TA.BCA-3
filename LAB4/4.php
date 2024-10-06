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

        $fib1 = 0;
        $fib2 = 1;

        echo "Fibonacci series up to $n numbers: <br>";

        if ($n >= 1) {
            echo $fib1 . " ";
        }

        if ($n >= 2) {
            echo $fib2 . " ";
        }

        for ($i = 3; $i <= $n; $i++) {
            $fib3 = $fib1 + $fib2;
            echo $fib3 . " ";
            
            $fib1 = $fib2;
            $fib2 = $fib3;
        }

        echo "\n";
    ?>
</body>
</html>