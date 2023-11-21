<?php

$servername = "db";
$username = "user1";
$password = "password";
$dbname = "lamp_stack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display table data
$sql = "SELECT * FROM `table`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Title</th><th>Body</th><th>Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['ID']}</td><td>{$row['Title']}</td><td>{$row['Body']}</td><td>{$row['Date']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>