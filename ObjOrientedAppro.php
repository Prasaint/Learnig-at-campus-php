<?php
$servername = "localhost";
$username = "root";
$password = "";

// Step:1
$conn = new mysqli($servername, $username, $password);

// Step:2
if ($conn->connect_error) {
    die("Connection failed: \n" . $conn->connect_error);
}
echo "Connection Created: \n";

// Step:3 // Create database
$sqldb = "CREATE DATABASE IF NOT EXISTS helloos";
if ($conn->query($sqldb)) {
    echo "Database Created: \n";
} else {
    echo "Database is not created: \n";
}

// Select the database
$conn->select_db("helloos");

// Step:4 // Create table
$ctable = "CREATE TABLE IF NOT EXISTS helloos(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    age INT(3) NOT NULL,
    phone VARCHAR(15) NOT NULL
)";

if ($conn->query($ctable) === TRUE) {
    echo "Table created successfully: \n";
} else {
    echo "Error creating table: \n" . $conn->error;
}

// Step:5 // Insert data
$insertData = "INSERT INTO helloos(name, age, phone) VALUES 
('John Doe', 25, '1234567890'),
('Jane Smith', 30, '0987654321'),
('Alice Johnson', 22, '1122334455')";

if ($conn->query($insertData) === TRUE) {
    echo "Data inserted successfully: \n";
} else {
    echo "Error inserting data: \n" . $conn->error;
}
?>
