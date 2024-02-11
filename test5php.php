<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    
    // Perform further processing (e.g., database insertion, data manipulation)
    // ...
    
    // Display a thank you message or redirect to another page
    echo "Thank you, $name, for submitting your information!";
}
?>
