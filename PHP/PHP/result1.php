<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name   = $_POST['name'] ?? '';
    $phone  = $_POST['phone'] ?? '';
    $email  = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $year   = $_POST['year'] ?? '';
    $subject = $_POST['subject'] ?? [];

    // Convert subjects array to string
    $subjectList = implode(", ", $subject);

    echo "<h2>Form Details</h2>";
    echo "Name: $name <br>";
    echo "Phone: $phone <br>";
    echo "Email: $email <br>";
    echo "Gender: $gender <br>";
    echo "Year: $year <br>";
    echo "Subjects: $subjectList <br>";

    /* ---------- FILE UPLOAD ---------- */
    if (!empty($_FILES['image']['name'])) {

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];

        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];

        if (!in_array($ext, $allowed)) {
            echo "<br>❌ Invalid file type";
        } elseif ($file_size > 2097152) {
            echo "<br>❌ File size must be less than 2MB";
        } else {
            move_uploaded_file($file_tmp, "images/" . $file_name);
            echo "<br>✅ Image uploaded successfully";
        }
    }
}
?>
