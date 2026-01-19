<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "userdemo");
if (!$con) {
    die("Database connection failed");
}

if (isset($_POST['name'])) {

    $name   = $_POST['name'];
    $phone  = $_POST['phone'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];
    $year   = $_POST['year'];

    $subject = isset($_POST['subject']) ? implode(",", $_POST['subject']) : "";

    $image_name = "";
    if (!empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $tmp_name   = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, "uploads/" . $image_name);
    }

    /* INSERT QUERY */
    $sql = "INSERT INTO user3 
            (name, phone, email, gender, year, subject, image)
            VALUES 
            ('$name','$phone','$email','$gender','$year','$subject','$image_name')";

    if (mysqli_query($con, $sql)) {

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        header("Location: logsign.php");
        exit();
    } else {
        echo "Error saving data";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form1</title>
</head>
<body>

<form method="post" enctype="multipart/form-data"> 
   <label>Name:
        <input type="text" name="name" required>
    </label><br><br>

    <label>Phone:
        <input type="number" name="phone" required>
    </label><br><br>

    <label>Email:
        <input type="email" name="email" required>
    </label><br><br>

    <label>Gender:
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female"> Female
    </label><br><br>

    <label>Select Year:
        <select name="year" required>
            <option value="">--Select--</option>
            <option value="FY">FY</option>
            <option value="SY">SY</option>
            <option value="TY">TY</option>
        </select>
    </label><br><br>

    <label>Subjects:</label><br>
    <input type="checkbox" name="subject[]" value="Maths"> Maths<br>
    <input type="checkbox" name="subject[]" value="Physics"> Physics<br>
    <input type="checkbox" name="subject[]" value="Chemistry"> Chemistry<br><br>

    <label>Upload Image:
        <input type="file" name="image">
    </label><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
