<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linearLight";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("failed: " . $conn->connect_error);
}

$sql =mysqli_query($conn,"SELECT 'message_id', 'senderName', 'receiverName', 'content' FROM 'message' WHERE message_id = 1") ;

if ($result->num_rows > 0) {
  $table = $result->fetch_all(MYSQLI_ASSOC);
  }

  else {
  echo "0";

}
$conn->close();

echo json_encode($table)
?> 