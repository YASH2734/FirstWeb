<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "webdb");
if (!$con) {
    die("Database connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // GET FORM DATA
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    /* EMAIL */
    $toEmail = "yashparit165@gmail.com";
    $fromName = "Enquiry Form";
    $emailSubject = "New Enquiry Received";

    $htmlContent = "
        <h2>Enquiry Request</h2>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b><br>$message</p>
    ";

    $headers  = "From: $fromName <$email>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8";

    $mailSent = mail($toEmail, $emailSubject, $htmlContent, $headers);

    /* DATABASE INSERT (CORRECT WAY) */
    $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

    if (mysqli_stmt_execute($stmt)) {

        $_SESSION['success'] = "Message sent successfully";

        if ($mailSent) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "mail_failed"]);
        }

    } else {
        echo json_encode(["status" => "db_error"]);
    }

    exit();
}
?>
