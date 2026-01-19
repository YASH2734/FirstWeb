<?php
session_start();  
if(isset($_POST['discount'])){
    $discount=$_POST['discount'])
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
    Hello,
</h2>
<form method="POST">
    <label>Enter coupon code:</label><br><br>
        <input type="number" name="discount" required>
        <br><br>
    <input type="submit" name="logout" value="Logout">
</form>
</body>
</html>

