<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linearLight";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// آپدیت محصولات  

$sql =mysqli_query($conn,"UPDATE
`linearLight`
SET
price = 800000
 WHERE
 id = 2");

$result = $conn->query($sql);


$conn->close();
?>