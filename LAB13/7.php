<?php
$filename = "employee.txt";
    if (unlink($filename)) {
        echo "File '$filename' deleted successfully.";
    } else {
        echo "Unable to delete file '$filename'.";
    }
?>
