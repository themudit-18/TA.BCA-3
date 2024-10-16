<?php
$new_students = ["Frank1", "Grace", "Hannah"];
$file = fopen('students.txt', 'a');
foreach ($new_students as $student) {
   fwrite($file, $student . " ");
   }
   echo "Appended!";
   fclose($file);
?>
