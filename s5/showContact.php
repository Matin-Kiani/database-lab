<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linearLight";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql =mysqli_query($conn,"SELECT 'user_id', 'password', 'firstname', 'lastname', 'email', 'phone','is_delete' FROM 'users'");

if ($result->num_rows > 0) {
  // output data of each row
  $table = $result->fetch_all(MYSQLI_ASSOC);
  }

  else {
  echo "0 results";
}
$conn->close();
echo json_encode($table)
?> 