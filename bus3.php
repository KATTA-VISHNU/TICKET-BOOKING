<!DOCTYPE html>
<html>
<head>
    <title>Form Card</title>
    <style>
        .card {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: auto;
            margin-top: 50px;
            background-color: rgba(39, 53, 177, 0.377);
            background: radial-gradient(rgba(131,231,227),rgba(141,221,217),rgba(141,221,217),rgba(141,221,217),skyblue,rgba(0,0,0,0.3));
            box-shadow: inset 0 0 20px 0 rgba(0,0,0,0.4),0 0 20px 0 rgba(141,221,217);

        }   
        .back{
            background-image: url(data:image/jpeg;base64,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);
            background-size:cover ;
            
        }
    </style>
</head>
<body class="back">

<br><Br><br><br><Br>

<div class="card mt-5">
  <div class="card-body">
    <?php 

           // Get form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
      $departure_date = $_POST["departure"];
    $name3=$_POST['name3'];
    $cost3=$_POST['cost3'];

        echo "<h4>YOUR BUS IS BOOKED!</h4>";
         echo "USERNAME:  &nbsp&nbsp&nbsp ".$name."<br>";
         echo "ADRESS:   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$address."<br>";
         echo "SOURCE:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$source."<br>";
         echo "DESTINATION:&nbsp&nbsp".$destination."<br>";
         echo "DEPARTURE DATE:&nbsp&nbsp".$departure_date."<br>";
         echo "TRAVELS NAME:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$name3."<br>";
         echo "TICKET COST:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$cost3."<br>";
        
        
        
         // SQL query to create the table



         
?>

</div>
</div>
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
    $createTableSQL = "CREATE TABLE IF NOT EXISTS p_buses(
   
        username  VARCHAR(255) NOT NULL,
        useraddress VARCHAR(255) NOT NULL,
        source VARCHAR(255) NOT NULL,
        destination VARCHAR(255) NOT NULL,
        departure_date DATE NOT NULL,
        company_name varchar(225) not null,
        cost int(11) not null
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
    $name3=$_POST['name3'];
    $cost3=$_POST['cost3'];
   
 
    $sql1 = "insert into p_buses(username, useraddress, source, destination, departure_date,company_name,cost) VALUES ('$name', '$address', '$source', '$destination', '$departure_date','$name3','$cost3');";

    if (mysqli_query($conn,$sql1)) {
        echo "Search data added successfully.<br>";
    } else {
        echo "not added";
    }
    
    // Close the connection
    $conn->close();

   
}
?>




    </body>
</html>














































