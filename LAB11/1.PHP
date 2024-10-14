<?php

function validateName($name) {
    return preg_match("/^[a-zA-Z-' ]*$/", $name);
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateMobile($mobile) {
    return preg_match("/^[0-9]{10}$/", $mobile);
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';

$nameError = $emailError = $mobileError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($name) || !validateName($name)) {
        $nameError = "Invalid name";
    }
    if (empty($email) || !validateEmail($email)) {
        $emailError = "Invalid email";
    }
    if (empty($mobile) || !validateMobile($mobile)) {
        $mobileError = "Invalid mobile number";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Side Validation</title>
</head>
<body>

<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span><?php echo $nameError; ?></span><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span><?php echo $emailError; ?></span><br>
    Mobile: <input type="text" name="mobile" value="<?php echo $mobile; ?>">
    <span><?php echo $mobileError; ?></span><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
