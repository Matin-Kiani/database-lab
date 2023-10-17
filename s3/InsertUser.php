<?php
// اطلاعات اتصال به پایگاه داده
$servername = "localhost"; // آدرس سرور پایگاه داده
$username = "نام_کاربری"; // نام کاربری پایگاه داده
$password = "رمز_عبور"; // رمز عبور پایگاه داده
$dbname = "نام_پایگاه_داده"; // نام پایگاه داده

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال به پایگاه داده ناموفق بود: " . $conn->connect_error);
}

// اطلاعات کاربر جدید
$username = "نام_کاربری_جدید";
$password = "رمز_عبور_جدید";
$email = "ایمیل_کاربر_جدید";

// استفاده از prepared statement برای افزودن کاربر
$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("sss", $username, $password, $email);

    // اجرای prepared statement
    if ($stmt->execute()) {
        echo "کاربر با موفقیت اضافه شد.";
    } else {
        echo "خطا در افزودن کاربر: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "خطا در ایجاد prepared statement: " . $conn->error;
}

// بستن اتصال به پایگاه داده
$conn->close();
?>
