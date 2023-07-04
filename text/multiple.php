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

$sql = "INSERT INTO MyGuests (Name, Price, Choose)
VALUES ('xc90', '1500000', 'Volvo')";

$sql = "INSERT INTO MyGuests (Name, Price, Choose)
VALUES ('Q3', '3500000', 'Audi')";

$sql = "INSERT INTO MyGuests (Name, Price, Choose)
VALUES ('Amg', '2500000', 'Mercedes')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>