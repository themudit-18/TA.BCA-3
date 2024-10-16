<?php

    include_once "./classes/Student.php";
    $s= new Student();
    $s->insertStudents($_POST);

    header("Location: listStudents.php")
?>