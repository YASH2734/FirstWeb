<?php
session_start();
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    header("location: welcome.php");
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>login page</title>

<!---    <style>
        body {
            font-family: Arial;
            padding: 40px;
        }
        .box {
            background: #ffffffaa;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
        }
    </style> --->
</head>
<body>
    <h3>login</h3>

    <form method="post">
        <label>Enter name:</label><br><br>
        <input type="text" name="name" required>
        <br><br>
        <input type="submit" value="submit">
    </form>
    <br>
</body>
</html>
