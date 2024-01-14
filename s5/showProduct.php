<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "linearLight";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("failed: " . $conn->connect_error);
}

$sql =mysqli_query($conn,"SELECT * FROM 'products'"); 
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
  $table = $result->fetch_all(MYSQLI_ASSOC);
  }

  else {
  echo "0 results";
}
$conn->close();
echo json_encode($table)
?> 