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
            background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJUA3wMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAACAQADBAUH/8QAGhABAQEBAQEBAAAAAAAAAAAAAAEREgIhMf/EABoBAAMBAQEBAAAAAAAAAAAAAAECAwAEBgX/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECEv/aAAwDAQACEQMRAD8A/YUZHmnUrIi3NBWRK6eaWkiNrp4paqIlrp5LV1KiVfkipqamrRlFtGmAkHWKaLraOsB4tbUTQPCi6OprKQ9YW00PDYNXTQz2alZHjkV1NGtp+aFXW0dTXTzS0rU1NTXTxS0tQdbXXxSUrRtTWtdHJW1NS36OqwFtS1LUtNoauto6msMJtHW0qkLWDW0FIetoa2ieHrBq62qQ20NWU0PHuo+r8a2Ja8ggyalTTQKutqWjatxS0rU0bU108UtLWtHU11cUlLUtG1NdPPRKWjalo2rShatqWpamn0C1NHW1tNC1tHU0NPCtbR1g1SFrSjra2qQ9bR1tbVIUq6GtptPHvStfwbXk3OtG1tSiDWpaOpafmhS1NHUtdHNJS1NHUt+OnikpWpaFra6eaSlaOpo66OaW0rU0bU0+gWtoa2jppT1NHW0FIWto62hqsLW0dbW1SHraEq62qQ9bQ1dFSPoVK2jXl3KyWpo2jAW0bWtHTQtW0bUtG1Tmlpamjo66OaSnqaGpro5pKWpo6OujnotK1NC+m1WUD1tDW02mha2jraGqQtbR1tbVIetoa0rarD1dDW1tUh6uhraOqx9LUtS0bXm8ceraNqalGQLWtG1rQtNhVtG1LRtGFtW1LRtHVeaWno6Ojq/NTp6N9DfQ2r80lK1tC1NWlZ01tc9bTaaOmtrnraOqx01tc9XQ1SHq6562tqsdNXXPVlbVYcpQJ8KUdUlfQtS1LRtfAca6NqaNpiWtalqWhaMhdW0bUtG02FtW0LWtC00JaWjaNo30rzS2naPQWpatzSWlfTdOdrdKyhK6dN059Np9PK662ufTdNqsrprdOeto6rK660rnqyhqsrpKUrnKUrelJT0tc5Slb0pK+haNqWja+O4rVtG1LRtHCWraNo2jaeQtq2jaNo2mwlq2jaNo2mwlq2jaNo2mkJaVqX0F9DfR5S2lfTdOdrdKShK6avTl02n1SV16bXPpum1bmuvTa5dFK3pWV005XGU5Q9KSukpSuelKHpSV1lWVzl+FK3pSV7rRtS0LXz5HDaVoWpaFp5CWlaFqWhaOEtK0LUtC00hLStC1LRtNhLVtC1L6C+jyFtK0bQtG+jSEtK+m6c+m6HGldNXpy6bplZXXpunPVlbVpXWUpXKUpS2qSuspa5SlKX0rK6ylK5SnKHpSV1lWVzlKVvSkr22hazIRxULRtZjJ0bQtZjQlG0LWY0To2udrMeFo2hazGJRtC1WGEoWtrMZo2rrMy0XSlZi1WFKUrMRSFKWsxFuSlOMxarChIxVI/9k=);
            background-size:cover ;
            
        }
      
      
    </style>
</head>
<body class="back">

<br><Br><br><br><Br>

<div class="card mt-5">
  <div class="card-body">
    <?php 
         session_start();
         $v=$_SESSION['user'];
         echo "Hello ".$v.",";
         $destination = $_POST["destination"];
         $checkin = $_POST["checkin"];
         $checkout = $_POST["checkout"];
         $rooms = $_POST["rooms"];
         $guests = $_POST["guests"];
         $nationality=$_POST["nationality"];
         $residence=$_POST['residence'];
         $hname3=$_POST['hotel3'];
         $cost3=$_POST['cost3'];

        echo "<h4>YOUR HOTEL IS BOOKED!</h4>";
         echo "DESTINATION:  &nbsp&nbsp&nbsp ".$destination."<br>";
         echo "CHECKIN:   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$checkin."<br>";
         echo "CHECKOUT:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$checkout."<br>";
         echo "ROOMS:&nbsp&nbsp".$rooms."<br>";
         echo "GUESTS:&nbsp&nbsp".$guests."<br>";
         echo "NATIONALITY:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$nationality."<br>";
         echo "RESIDENCE:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$residence."<br>";
         echo "HOTEL NAME:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$hname3."<br>";
         echo "COST:&nbsp&nbsp&nbsp&nbsp &nbsp  ".$cost3."<br>";
        
        
         // SQL query to create the table



         
?>

</div>
</div>
    
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
         else{
            echo "connection established";
         }
         
       /*  $que="select * from cab_book;";
         $res=mysqli_query($connect,$que);
         echo mysqli_num_rows($res);
         while($row=mysqli_fetch_assoc($res)){
            echo $row['travel_date']." ".$row['mobile_number'];
         }

        $insertQuery = "INSERT INTO hotel1 VALUES ('$destination')";
            if (mysqli_query($connect, $insertQuery)) {
            echo "<h2>Search Results:</h2>";
            echo "Data inserted successfully!";
            } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($connect);
            }*/
         
         $q="create table if not exists hotel_search_hotel3(destination varchar(255) NOT NULL,checkin date NOT NULL,
         checkout date,rooms int,guests int,nationality varchar(40),residence varchar(40),hotel_name varchar(40),price varchar(50));";
        if(mysqli_query($connect,$q));
        {
            echo "table created";
        }
        $insertQuery = "INSERT INTO hotel_search_hotel3(destination, checkin, checkout, rooms, guests, nationality, residence,hotel_name,price)
        VALUES ('$destination', '$checkin', '$checkout', '$rooms', '$guests', '$nationality', '$residence','$hname3','$cost3')";

        if (mysqli_query($connect, $insertQuery)) {
        echo "<h2>Search Results:</h2>";
        echo "Data inserted successfully!";
        } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);     
         
         ?>
         

         

        



    



    
    </body>
</html>












