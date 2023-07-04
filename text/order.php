<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsishan2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Name, Price FROM MyGuests ORDER BY Price";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Name"]. " " . $row["Price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>