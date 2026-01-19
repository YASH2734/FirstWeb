<?php
session_start();  
if (!isset($_SESSION['name'])) {
	header("Location: login.php");
}
if(isset($_POST['logout'])){
	session_destroy();
	session_unset();
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
<h2>
    Welcome, <?php echo $_SESSION['name']; ?> !

</h2>
<form method="POST">
    <input type="submit" name="logout" value="Logout">
</form>
</body>
</html>

