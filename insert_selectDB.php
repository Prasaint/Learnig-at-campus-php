<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

// Step 1: Connect to MySQL
$conn = mysqli_connect($servername, $username, $password);

// Step 2: Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection Created.<br>";

// Step 3: Create Database
$db = "CREATE DATABASE `fifth_semest`";
if (mysqli_query($conn, $db)) {
    echo "Database Created.<br>";
} else {
    echo "Database not created: " . mysqli_error($conn) . "<br>";
}

// Step 4: Select Database
mysqli_select_db($conn, 'fifth_semest');

// Step 5: Create Table
$student = "CREATE TABLE IF NOT EXISTS students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $student)) {
    echo "Table created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Step 6: Insert Data
$studentData1 = "INSERT INTO students(student_name, email) VALUES('Prashant', 'prashant@gmail.com')";
$studentData2 = "INSERT INTO students(student_name, email) VALUES('Prabhu', 'prabhu@gmail.com')";

mysqli_query($conn, $studentData1);
mysqli_query($conn, $studentData2);

// Step 7: Fetch and display data
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Student Table</h1>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Student Name</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['id']}</td><td>{$row['student_name']}</td><td>{$row['email']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

?>

</body>
</html>