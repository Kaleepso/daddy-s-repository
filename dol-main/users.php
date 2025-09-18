<?php
// Connect to your DB
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "pro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users in ascending order
$sql = "SELECT name, email FROM users ORDER BY name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count = 1;
    echo "<ol>"; // Ordered list
    while($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row["name"]) . " (" . htmlspecialchars($row["email"]) . ")</li>";
        $count++;
    }
    echo "</ol>";
} else {
    echo "No users found.";
}

$conn->close();
?>
