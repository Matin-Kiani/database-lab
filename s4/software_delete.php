<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linearLight";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// حذف نرم محصولات جدول 

$sql = mysqli_query($conn,"UPDATE `linearLight`
SET is_deleted = 1
WHERE id = 2;");

$result = $conn->query($sql);


$conn->close();
?>