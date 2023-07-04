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

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (Name, Price, Choose) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $Name, $Price, $Choose);

// set parameters and execute
$Name = "xc90";
$Price = "1500000";
$Choose = "Volvo";
$stmt->execute();

$Name = "Q3";
$Price = "3500000";
$Choose = "Audi";
$stmt->execute();

$Name = "Amg";
$Price = "2500000";
$Choose = "Mercedes";
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>