<?php
$source = "teachers.txt";
$destination = "employee.txt";
$copyFile=copy($source, $destination);
echo "Content copied successfully.";
?>
