<?php
    include_once "./classes/Student.php";

    $s = new Student();
    $delMsg = $s->deleteStudentById($_GET['id']);

    header("Location: listStudents.php");
    die();
?>