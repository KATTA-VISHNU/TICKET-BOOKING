<html>

<head>
    <style>
        body{
            background-color: black;
            
        }
        .room-card{
            box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
            box-shadow: inset 0 0 20px 0 rgba(141,221,217),0 0 20px 0 rgba(104,187,176);

        }
        .room-card img{
            border-radius:20px ;
            width: 200px;
            height: 150px;
            
        }
        .tit{
            background-color: skyblue;
            box-shadow: inset 0 0 20px 0 rgba(0,0,0,0.9),0 0 20px 0 rgba(0,0,0,0.9);
        }
        .fil{

        }
        .fil input{
            padding: 15px;
            font-size: 20px;
            box-shadow: inset 0 0 20px 0 rgba(0,0,0,0.9),0 0 20px 0 rgba(0,0,0,0.9);

        }
        .bt button{
            box-shadow: inset 0 0 20px 0 rgba(0,0,0,0.9),0 0 20px 0 rgba(0,0,0,0.9);

        }
        .dow{
            box-shadow: inset 0 0 10px 0 rgba(0,0,0,0.9),0 0 10px 0 rgba(0,0,0,0.9);

        }
        .one:hover{
            font-size: 1.5em; 
            color: #1722b8 !important;

        }
        
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="">
   





    <form action="bhotel1.php" method="POST" enctype="multipart/form-data">



    <h1 style="color: green;" class="tit mt-5 p-3 text-center col-md-6 mx-auto">Hotels Available Near <?php echo $_POST["destination"]; ?> </h1>
    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
        <img src="subhotel1.jpeg" alt="Girl in a jacket"> 
                </div>
        <div class="col-4 text-center">
                <h4 style="color: green;">Gangavaram Residency AC</h4>
                <small class="text-dark">4/482,Nagrajpet,Near Old Bus Stand,null,Kadapa,Andhra Pradesh,India</small>
            </div>
        <div class="col-4 text-center">
        <small style="color: black;">Starting From</small><br>
<big>RS.2,071</big> <sub>Per room/night</sub><br>
<input type="hidden" name="cost1" value="2,071">
<input type="hidden" name="hotel1" value="Gangavaram Residency AC">
     <input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="checkin" value="<?php echo $_POST["checkin"]; ?>">
     <input type="hidden" name="checkout" value="<?php echo $_POST["checkout"]; ?>">
     <input type="hidden" name="rooms" value="<?php echo $_POST["rooms"]; ?>">
     <input type="hidden" name="guests" value="<?php echo $_POST["guests"]; ?>">
     <input type="hidden" name="nationality" value="<?php echo $_POST["nationality"]; ?>">
     <input type="hidden" name="residence" value="<?php echo $_POST["residence"]; ?>">


     
            <button type="submit" name="submit" id="submit1" class="one" >SELECT ROOM</button>
              
            </div>
    </div>

    </div>

    </form>
    <form action="bhotel2.php" method="POST" enctype="multipart/form-data">
    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
        <img src="subhotel2.jpeg" alt="Girl in a jacket"> 
                </div>
        <div class="col-4 text-center">
                <h4 style="color: green;">Sri Srinivasa Residency</h4>
                <small class="text-dark">Kadapa - Tirupati Rd, Nehru Nagar, Chinna Chowk, Kadapa, Andhra Pradesh</small>
            </div>
        <div class="col-4 text-center">
        <small style="color: black;">Starting From</small><br>
<big>RS.3,300</big> <sub>Per room/night</sub><br>
<input type="hidden" name="cost2" value="3,300">
<input type="hidden" name="hotel2" value="Sri Srinivasa Residency">
<input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="checkin" value="<?php echo $_POST["checkin"]; ?>">
     <input type="hidden" name="checkout" value="<?php echo $_POST["checkout"]; ?>">
     <input type="hidden" name="rooms" value="<?php echo $_POST["rooms"]; ?>">
     <input type="hidden" name="guests" value="<?php echo $_POST["guests"]; ?>">
     <input type="hidden" name="nationality" value="<?php echo $_POST["nationality"]; ?>">
     <input type="hidden" name="residence" value="<?php echo $_POST["residence"]; ?>">
                <button type="submit" name="submit" id="submit2" class="one">SELECT ROOM</button>
            </div>
    </div>

    </div>
    </form>
    <form action="bhotel3.php" method="POST" enctype="multipart/form-data">

    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
        <img src="subhotel3.jpeg" alt="Girl in a jacket"> 
                </div>
        <div class="col-4 text-center">
                <h4 style="color: green;">Blue Diamond Hotel</h4>
                <small class="text-dark">Door No 2-383-A,Opp CSI Church,Kadapa,Andhra Pradesh,India</small>
            </div>
        <div class="col-4 text-center">
            <small style="color: black;">Starting From</small><br>
<big>RS.4,500</big> <sub>Per room/night</sub><br>
<input type="hidden" name="cost3" value="4,500">
<input type="hidden" name="hotel3" value="Blue Diamond Hotel">
<input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="checkin" value="<?php echo $_POST["checkin"]; ?>">
     <input type="hidden" name="checkout" value="<?php echo $_POST["checkout"]; ?>">
     <input type="hidden" name="rooms" value="<?php echo $_POST["rooms"]; ?>">
     <input type="hidden" name="guests" value="<?php echo $_POST["guests"]; ?>">
     <input type="hidden" name="nationality" value="<?php echo $_POST["nationality"]; ?>">
     <input type="hidden" name="residence" value="<?php echo $_POST["residence"]; ?>">
                <button type="submit" name="submit" id="submit3" class="one">SELECT ROOM</button>
            </div>
    </div>

    </div>

    </form>
    <form action="bhotel4.php" method="POST" enctype="multipart/form-data">
    <div class="container m-5">
    <div class="row m-auto room-card py-5" >
        <div class="col-3">
        <img src="subhotel5.jpeg" alt="Girl in a jacket"> 
                </div>
        <div class="col-4 text-center">
                <h4 style="color: green;">Gandi Resort</h4>
                <small class="text-dark">Kadapa,Kadapa,Andhra Pradesh,India</small>
            </div>
        <div class="col-4 text-center">
        <small style="color: black;">Starting From</small><br>
<big>RS.1,900</big> <sub>Per room/night</sub><br>
<input type="hidden" name="cost4" value="1,900">
<input type="hidden" name="hotel4" value="Gandi Resort">
<input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="checkin" value="<?php echo $_POST["checkin"]; ?>">
     <input type="hidden" name="checkout" value="<?php echo $_POST["checkout"]; ?>">
     <input type="hidden" name="rooms" value="<?php echo $_POST["rooms"]; ?>">
     <input type="hidden" name="guests" value="<?php echo $_POST["guests"]; ?>">
     <input type="hidden" name="nationality" value="<?php echo $_POST["nationality"]; ?>">
     <input type="hidden" name="residence" value="<?php echo $_POST["residence"]; ?>">
                <button type="submit" name="submit" id="submit4" class="one">SELECT ROOM</button>
            </div>
    </div>

    </div>
    </form>

    
        

















    <form  action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
   
        <h4 class="m-auto text-center col-md-6 p-3 ">If You know any exciting places in your selected destination<br>
                                                        upload the details of that hotel</h4>
        <div class="fil m-auto text-center col-md-6 p-3 "><input type="file" name="img" /></div>
        
       
        
        
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ((isset($_FILES["img"])) && ($_FILES["img"]["error"] == 0)) {
                $allowed = array("jpg", "jpeg", "png");
    
                $name = $_FILES["img"]["name"];
                $type = $_FILES["img"]["type"];
                $size = $_FILES["img"]["size"];
                $tmpname = $_FILES["img"]["tmp_name"];
    
                echo "$name";
                echo "$type";
                echo "$size";
    
    
                $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                if (!in_array($ext, $allowed)) {
                    echo "please select the jpg jpeg png format only";
                }
                $maxsize = 1024 * 1024 * 5;
                if ($size > $maxsize) {
                    echo "select the image with size less than 5 MB";
                }
    
                if (in_array($ext,$allowed)) {
                    if (move_uploaded_file($tmpname, "file_moves/" . $name)) {
                        echo "<h5>uploaded successfully</h5>";
                    } else {
                        echo "could not upload file";
                    }
                } else {
                    echo "type not matched";
                }
            } else {
                echo "error while uploading the file";
            }
        } else {
            echo "error";
        }
    

    ?>

<div class="text-center bt col-md-1 m-auto"><button type="submit" class="btn btn-info text-center col-md-12">upload</button></div>

    </form>


    <div class=" dow text-center bg-primary text-light col-md-1 m-auto p-2"><a  class="text-light" download="<?php echo $name ?>" href="file_moves/<?php echo $name ?>">download </a></div>

    
    
     


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>