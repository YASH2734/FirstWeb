<?php
$con = mysqli_connect('localhost','root','','userdemo');

if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$phpdbtable = "
CREATE TABLE user2 (
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($con, $phpdbtable)) {
    echo "Table created successfully";
} else {
    echo "Failed to create table: " . mysqli_error($con);
}

mysqli_close($con);
?>

