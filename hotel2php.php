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
session_start();
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $_SESSION["file"] = $_POST["file"];
    $_SESSION["destination"] = $_POST["destination"];
    $_SESSION["checkin"] = $_POST["checkin"];
    $_SESSION["checkout"] = $_POST["checkout"];
    $_SESSION["rooms"] = $_POST["rooms"];
    $_SESSION["guests"] = $_POST["guests"];

    
    $_SESSION["nationality"] = $_POST["nationality"];
    $_SESSION["residence"] = $_POST["residence"];
    $cost1=$_POST['cost1'];
    $hotel1=$_POST['hotel1'];
   

    $destination = $_SESSION["destination"];
    $checkin     =  $_SESSION["checkin"];
    $checkout     =  $_SESSION["checkout"];
    $rooms=$_SESSION["rooms"];
           $guests     =$_SESSION["guests"];
            $nationality =$_SESSION["nationality"];
            $residence = $_SESSION["residence"];
            $file = $_SESSION["file"];

    echo "<h2>Search Results:</h2>";
    echo "Destination: $destination<br>";
    echo "Check-in: $checkin<br>";
    echo "Check-out: $checkout<br>";
    echo "Rooms: $rooms<br>";
    echo "Guests: $guests<br>";
    echo "Nationality: $nationality<br>";
    echo "Residence: $residence<br>";
    echo $cost1;
    echo $hotel1;
   

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
