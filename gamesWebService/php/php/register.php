<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "servicedb");
if (!$con) {
    die("Database connection failed");
}

$message = "";

if (isset($_POST['register'])) {

    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $password = $_POST['password'];

    /* HASH PASSWORD */
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    /* CHECK EMAIL EXISTS */
    $checkUser = "SELECT id FROM registerdetail WHERE email='$email'";
    $res = mysqli_query($con, $checkUser);

    if (mysqli_num_rows($res) > 0) {
        $message = "Email already exists. Please login.";
    } else {

        /* INSERT USER */
        $insert = "INSERT INTO registerdetail (name, email, phone, password)
                   VALUES ('$name', '$email', '$phone', '$hashedPassword')";

        if (mysqli_query($con, $insert)) {
            $_SESSION['email'] = $email;
            header("Location: validLog.php");
            exit();
        } else {
            $message = "Error while signing up";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<?php if ($message): ?>
    <p style="color:red;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST">
    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Phone:
    <input type="number" name="phone" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">

    <br><br>
    <a href="validLog.php">Already have an account? Login</a>
</form>

</body>
</html>
