<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to create the table
$query = "CREATE TABLE IF NOT EXISTS hotel_search (
    id INT AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(255) NOT NULL,
    checkin DATE NOT NULL,
    checkout DATE NOT NULL,
    rooms INT NOT NULL,
    guests INT NOT NULL,
    nationality VARCHAR(255) NOT NULL,
    residence VARCHAR(255) NOT NULL
)";

// Execute the query
if (mysqli_query($connect, $query)) {
    echo "Table 'hotel_search' created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $destination = $_POST["destination"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $rooms = $_POST["rooms"];
    $guests = $_POST["guests"];
    $nationality = $_POST["nationality"];
    $residence = $_POST["residence"];
    echo "<h2>Search Results:</h2>";
    echo "Destination: $destination<br>";
    echo "Check-in: $checkin<br>";
    echo "Check-out: $checkout<br>";
    echo "Rooms: $rooms<br>";
    echo "Guests: $guests<br>";
    echo "Nationality: $nationality<br>";
    echo "Residence: $residence<br>";

    // Insert data into the table
    $insertQuery = "INSERT INTO hotel_search (destination, checkin, checkout, rooms, guests, nationality, residence)
                    VALUES ('$destination', '$checkin', '$checkout', '$rooms', '$guests', '$nationality', '$residence')";

    if (mysqli_query($connect, $insertQuery)) {
        echo "<h2>Search Results:</h2>";
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($connect);
    }
}

// Close the database connection
mysqli_close($connect);
?>
