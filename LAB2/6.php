<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $percentage = 75;

        switch (true) {
            case ($percentage < 40):
                echo "result = ".$percentage." class = Fail";
                break;
            case ($percentage >= 40 && $percentage < 50):
                echo "result = ".$percentage." class = Pass Class";
                break;
            case ($percentage >= 50 && $percentage < 60):
                echo "result = ".$percentage." class = Second Class";
                break;
            case ($percentage >= 60 && $percentage < 70):
                echo "result = ".$percentage." class = First Class";
                break;
            case ($percentage >= 70):
                echo "result = ".$percentage." class = Distinction";
                break;
            default:
                echo "Invalid percentage";
                break;
        }
    ?>
</body>
</html>