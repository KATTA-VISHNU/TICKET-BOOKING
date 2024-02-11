<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL command to create the table if it doesn't exist
    $createTableSQL = "CREATE TABLE IF NOT EXISTS bus_search (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        source VARCHAR(255) NOT NULL,
        destination VARCHAR(255) NOT NULL,
        departure_date DATE NOT NULL
    )";

    if ($conn->query($createTableSQL) === TRUE) {
        echo "Table created or already exists.<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }

    // Get form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $departure_date = $_POST["departure"];
    

    // SQL command to insert data into the table
    $insertSQL = "INSERT INTO bus_search (name, address, source, destination, departure_date) VALUES ('$name', '$address', '$source', '$destination', '$departure_date')";

    if ($conn->query($insertSQL) === TRUE) {
        echo "Search data added successfully.<br>";
    } else {
        echo "Error: " . $insertSQL . "<br>" . $conn->error;
    }

    // Retrieve and print extracted data
    $selectSQL = "SELECT * FROM bus_search";
    $result = $conn->query($selectSQL);

    if ($result->num_rows > 0) {
        echo "<h2>Extracted Data:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";
            echo "Source: " . $row["source"] . "<br>";
            echo "Destination: " . $row["destination"] . "<br>";
            echo "Departure Date: " . $row["departure_date"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No records found.";
    }

    // Close the connection
    $conn->close();
}
?>
