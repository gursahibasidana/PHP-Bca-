<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) die("Connection failed");

$sql = "CREATE DATABASE myDatabase";
echo $conn->query($sql) ? "Database created" : "Error: " . $conn->error;

$conn->close();

echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>
