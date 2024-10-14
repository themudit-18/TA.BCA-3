<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $password = isset($_GET['password']) ? $_GET['password'] : '';
        $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
        $courses = isset($_GET['courses']) ? $_GET['courses'] : [];
        
        echo "<h2>Retrieved using GET method:</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "password: " . htmlspecialchars($password) . "<br>";
        echo "gender: " . htmlspecialchars($gender) . "<br>";
        echo "Courses: " . htmlspecialchars(implode(', ', $courses)) . "<br>";


        // extract($_GET);
        // if(isset($name))
        // {
        //     echo "Name: " . $name . "<br>";
        // }
        // if(isset($courses))
        // {
        //     print_r($courses);
        // }
    }
?>