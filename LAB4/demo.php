<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name">
        <input type="submit" value="submit" name="s">
    </form>

    <?php
    // $no = $_POST['name'];
    // echo $no;
    if (isset($_GET['s'])) {
        $no = $_GET['name'];
        // echo $no;
        for ($i=0; $i <= $no; $i++) { 
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>