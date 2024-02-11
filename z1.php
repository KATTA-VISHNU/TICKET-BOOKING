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
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNfBlpw3lzaSZ1AM0TxhsIdf-TR4-aGEdf8A&usqp=CAU);


            background-size:cover ;
            
        }
        
    </style>
</head>
<body class="back">

<br><Br><br><br><Br>

<div class="card mt-5">
  <div class="card-body">

      




 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $from = $_POST["from"];
    $to = $_POST["to"];
    $date = $_POST["date"];
    $coupon = $_POST["coupon"];
    $mobile = $_POST["mobile"];

    

    // Validate coupon and mobile number (same validation logic as in JavaScript)
    $couponRegex = '/^[a-zA-Z]{6}\d{4}$/';
    $mobileRegex = '/^\d{10}$/';
    
    if (!preg_match($couponRegex, $coupon) || !preg_match($mobileRegex, $mobile)) {
        echo "Invalid coupon code or mobile number. Data not stored.";
        echo "
        
        
        <a href='project2sub1.php'><button>Invalid Coupon</button></a>";
        exit;
    }

    // Database connection parameters
    $host = "localhost";  // Change this to your database host
    $username = "root";  // Change this to your database username
    $password = "";  // Change this to your database password
    $database = "project";  // Change this to your database name
    

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create the cab_book table if it doesn't exist
    $createTableSQL = "CREATE TABLE IF NOT EXISTS cab_book (
        id INT AUTO_INCREMENT PRIMARY KEY,
        from_location VARCHAR(255) NOT NULL,
        to_location VARCHAR(255) NOT NULL,
        travel_date DATE NOT NULL,
        coupon_code VARCHAR(10) NOT NULL,
        mobile_number VARCHAR(10) NOT NULL
    )";

    if ($conn->query($createTableSQL) !== TRUE) {
        echo "Error creating table: " . $conn->error;
    }

    // Insert data into the cab_book table
    $insertSQL = "INSERT INTO cab_book (from_location, to_location, travel_date, coupon_code, mobile_number)
                  VALUES ('$from', '$to', '$date', '$coupon', '$mobile')";

    if ($conn->query($insertSQL) === TRUE) {
        echo "Data stored successfully!";
        session_start();
        $_SESSION['from'] = $_POST["from"];
        $_SESSION['to'] = $_POST["to"];
        $_SESSION['date']= $_POST["date"];
        $_SESSION['coupon'] = $_POST["coupon"];
        $_SESSION['mobile'] = $_POST["mobile"];
       echo "<h4>YOUR CAB IS BOOKED!</h4>";
        echo "FROM:  &nbsp&nbsp&nbsp ". $_SESSION['from']."<br>";
        echo "TO:   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['to']."<br>";
        echo "DATE:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$_SESSION['date']."<br>";
        echo "COUPON:&nbsp&nbsp". $_SESSION['coupon']."<br>";
        echo "MOBILE:&nbsp&nbsp".$_SESSION['mobile']."<br>";
        echo "<h4>after adding coupon</h4><br><h5>YOUR HIRE : 500";
        session_destroy();




     
    } else {
        echo "Error: " . $insertSQL . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
     </div>
</div>
    </body>
</html>