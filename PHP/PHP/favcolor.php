<?php
// If form is submitted, set the cookie
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("favColor", $color, time() + (7 * 24 * 60 * 60)); 
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Color using Cookie</title>

    <style>
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
    </style>
</head>

<body
<?php
if (isset($_COOKIE['favColor'])) {
    echo "style='background-color:" . $_COOKIE['favColor'] . "'";
}
?>
>

<div class="box">
    <h3>Favorite Color</h3>

    <form method="post">
        <label>Enter Color:</label><br><br>
        <input type="text" name="color" placeholder="red / blue / green" required>
        <br><br>
        <input type="submit" value="Save Color">
    </form>

    <br>
 
</div>

</body>
</html>
