<?php
    include_once "./classes/Student.php";

    $s=new Student();
    $updateMessg=$s->updateStudents($_POST);
    
    header("Location: listStudents.php");

    
?>