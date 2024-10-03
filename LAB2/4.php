<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstNumber = 10;
        $secondNumber = 50;
        $thirdNumber = 50;
        
        if($firstNumber>$secondNumber and $firstNumber>$thirdNumber and $firstNumber!=$secondNumber){
            echo "First Number Is Gretest Number";
        }
        elseif($secondNumber>$thirdNumber and $secondNumber>$firstNumber and $secondNumber!=$thirdNumber and $firstNumber!=$secondNumber){
            echo "Second Number Is Greatest Number";
        }
        elseif($thirdNumber>$firstNumber and $thirdNumber>$secondNumber and $thirdNumber!=$firstNumber and $secondNumber!=$thirdNumber and $firstNumber!=$secondNumber){
            echo "Third Number Is Greatest Number";
        }
        else{
            echo "Two Or More Than Two Are Same";
        }
    ?>
</body>
</html>