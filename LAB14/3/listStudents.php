<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Student</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <h1>Student List</h1>
    <a href="./studentRegistration.php" class="btn btn-outline-dark">Add New</a>
        <?php
            include_once "./classes/Student.php";
            $s= new Student();
            $stuArray=$s->getAllStudents();
            foreach ($stuArray as $key=>$value)
            {
        ?>
        <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title"><?php echo $value['enrollment'] ?></h5>
            <p class="card-text"><?php echo $value['name'] ?></p>
            <a href="detailStudent.php?id=<?php echo $value['id']?>" class="btn btn-outline-primary">More Details</a>
            <a href="editStudent.php?id=<?php echo $value['id']?>" class="btn btn-outline-warning">Edit</a>
  </div>
</div>
        <?php
            }
        ?>
    </table>
</body>
</html>