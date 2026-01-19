<?php
session_start();

if (isset($_POST['register'])) {

    $_SESSION['reg_email']    = $_POST['email'];
    $_SESSION['reg_password'] = $_POST['password'];

    header("Location: services.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<form method="post">
    <label>Email:
        <input type="email" name="email" required>
    </label><br><br>

    <label>Password:
        <input type="password" name="password" required>
    </label><br><br>

    <button type="submit" name="register">Register</button>
</form>

</body>
</html>
