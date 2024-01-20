<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fusionforge";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Fetch data from the database
$sql = "SELECT * FROM mytable1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["column_name"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>