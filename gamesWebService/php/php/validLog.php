<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "servicedb");
if (!$con) {
    die("Database connection failed");
}

$message = "";

if (isset($_POST['login'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    // safety (still no stmt)
    $email = mysqli_real_escape_string($con, $email);

    $sql = "SELECT * FROM registerdetail WHERE email='$email'";
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) == 1) {

        $row = mysqli_fetch_assoc($res);
        $dbPassword = $row['password'];

        // CASE 1: hashed password
        if (password_verify($password, $dbPassword)) {

            $_SESSION['email'] = $row['email'];
            $_SESSION['name']  = $row['name'];
            header("Location: services.php");
            exit();

        }
        // CASE 2: old plain-text password
        elseif ($password === $dbPassword) {

            // upgrade password to hash
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query(
                $con,
                "UPDATE registerdetail SET password='$newHash' WHERE email='$email'"
            );

            $_SESSION['email'] = $row['email'];
            $_SESSION['name']  = $row['name'];
            header("Location: services.php");
            exit();

        } else {
            $message = "Invalid email or password";
        }

    } else {
        $message = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php if ($message): ?>
    <p style="color:red;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="post">
    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

</body>
</html>
