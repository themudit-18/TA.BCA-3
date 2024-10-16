<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        include_once "./classes/Student.php";

        $s = new Student();
        $stuDetail = $s->getStudentById($_GET['id']);
    ?>

<div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h4>Id:</h4>
            <p class="card-text"><?php echo $stuDetail['id']; ?></p>
            <h4>Name:</h4>
            <p class="card-text"><?php echo $stuDetail['name']; ?></p>
            <h4>Enrollment:</h4>
            <p class="card-text"><?php echo $stuDetail['enrollment']; ?></p>
            <h4>Branch:</h4>
            <p class="card-text"><?php echo $stuDetail['branch']; ?></p>
            <h4>Sem:</h4>
            <p class="card-text"><?php echo $stuDetail['sem']; ?></p>
            <a href="./listStudents.php" class="btn btn-outline-dark">Back</a>

  </div>
</div>
</body>
</html>