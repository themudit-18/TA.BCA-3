<?php
$nameError = $emailError = $mobileError = $passwordError = $positionError = "";
$name = $email = $mobile = $password = $position = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $password = htmlspecialchars($_POST['password']);
    $position = htmlspecialchars($_POST['position']);

    $isValid = true;

    if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameError = "Invalid name";
        $isValid = false;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email";
        $isValid = false;
    }

    if (empty($mobile) || !preg_match("/^[0-9]{10}$/", $mobile)) {
        $mobileError = "Invalid mobile number";
        $isValid = false;
    }

    if (empty($password) || strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters long";
        $isValid = false;
    }

    if (empty($position)) {
        $positionError = "Position is required";
        $isValid = false;
    }

    if ($isValid) {
        echo "<h2>Employee Registration Successful:</h2>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Mobile: $mobile <br>";
        echo "Password: $password <br>";
        echo "Position: $position <br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration Form</title>
</head>
<body>
<h1>Employee Registration Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span><?php echo $nameError; ?></span><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span><?php echo $emailError; ?></span><br>
    Mobile: <input type="text" name="mobile" value="<?php echo $mobile; ?>">
    <span><?php echo $mobileError; ?></span><br>
    Password: <input type="password" name="password" value="<?php echo $password; ?>">
    <span><?php echo $passwordError; ?></span><br>
    Position: <input type="text" name="position" value="<?php echo $position; ?>">
    <span><?php echo $positionError; ?></span><br>
    <input type="submit" value="Register">
</form>

</body>
</html>
