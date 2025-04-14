<?php
$conn = new mysqli("localhost", "root", "", "myDatabase");
if ($conn->connect_error) die("Connection failed");

$sql = "INSERT INTO students (name, age, email) VALUES ('John Doe', 20, 'john@example.com')";
echo $conn->query($sql) ? "Data inserted" : "Error: " . $conn->error;

$conn->close();

echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>
