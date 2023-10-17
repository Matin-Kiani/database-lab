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

// اطلاعات پیام جدید
$sender = "فرستنده_پیام";
$message = "متن_پیام";

// استفاده از prepared statement برای درج پیام
$sql = "INSERT INTO messages (sender, message) VALUES (?, ?)";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ss", $sender, $message);

    // اجرای prepared statement
    if ($stmt->execute()) {
        echo "پیام با موفقیت اضافه شد.";
    } else {
        echo "خطا در درج پیام: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "خطا در ایجاد prepared statement: " . $conn->error;
}

// بستن اتصال به پایگاه داده
$conn->close();
?>
