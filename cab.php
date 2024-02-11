<?php
// Database connection details
$host = "localhost";  // Change this to your database host
$username = "username";  // Change this to your database username
$password = "password";  // Change this to your database password
$database = "project";  // Change this to your database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password,$database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$createDbSql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($createDbSql) === TRUE) {
    echo "Database created or already exists.\n";
} else {
    echo "Error creating database: " . $conn->error;
}



// Create the table if it doesn't exist
$createTableSql = "CREATE TABLE IF NOT EXISTS cab_search (
    id INT AUTO_INCREMENT PRIMARY KEY,
    from_location VARCHAR(255) NOT NULL,
    to_location VARCHAR(255) NOT NULL,
    travel_date DATE NOT NULL
)";
if ($conn->query($createTableSql) === TRUE) {
    echo "Table created or already exists.\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = $_POST["from"];
    $to = $_POST["to"];
    $date = $_POST["date"];


    // Construct and execute the SQL query
    $sql = "INSERT INTO cab_search (from_location, to_location, travel_date) VALUES ('$from', '$to', '$date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
