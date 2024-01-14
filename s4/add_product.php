<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linearLight";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// اضافه کردن محصول به جدول 

$sql =mysqli_query($conn, "INSERT INTO linearLight(
    id,
    product_name,
    width,
    height,
    price,
    product_desc,
    product_image,
    is_delete
)
VALUES(
    1,
    "چراغ خطی توکار",
    5,
    10,
    600000,
    "توضیحات محصول",
    "image1.jpg",
    0
);");

$result = $conn->query($sql);


$conn->close();
?>