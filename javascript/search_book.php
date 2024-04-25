<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "test"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_author = $_POST["search_author"];

    // SQL to search for books by author
    $sql = "SELECT * FROM books WHERE author LIKE '%$search_author%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Title: " . $row["title"]. " - Author: " . $row["author"]. "<br>";
        }
    } else {
        echo "No books found for author: " . $search_author;
    }
}

$conn->close();
?>
