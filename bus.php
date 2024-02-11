<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
   





    <form action="bus1.php" method="POST" enctype="multipart/form-data">



    <h1 style="color: green;" class="tit mt-5 p-3 text-center col-md-6 mx-auto"><?php  echo $_POST["source"]; ?> to <?php echo $_POST["destination"];?> Buses</h1>
    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
       <div class="text_center"> APSRTC</div>
        <img src="apsrtc.png" alt="Girl in a jacket"> 
                </div>
        <div class="col-2 text-center">
        <h5>time 9:00 AM </h5>
            <br>
            <br>
            <small>Anand Rao Circle</small>  
                
            </div>
            <div class="col-2 text-center">
            starts from<br>
            INR<b>2500</b>
                     
            </div>
            <div class="col-3 text-center">
        
        29 seats available<br>
        10 single
    <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
     <input type="hidden" name="source" value="<?php echo $_POST["source"]; ?>">
     <input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">
     <input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="departure" value="<?php echo $_POST["departure"]; ?>">
    <input type="hidden" name="name1" value="apsrtc">
    <input type="hidden" name="cost1" value="2500">
        <button type="submit" name="submit" id="submit1" class="one" >Book Now</button>
        </div>

    </div>

    </div>

    </form>
    <form action="bus2.php" method="POST" enctype="multipart/form-data">
    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
        <div class="text_center"> TSRTC</div>
        <img src="tsrtc.jpeg" alt="Girl in a jacket"> 
                </div>
        <div class="col-2 text-center">
        <h5>time 10:00 AM </h5>
            <br>
            <br>
            <small>GANDHI STREET</small>  
                
            </div>
        <div class="col-2 text-center">
            starts from<br>
            INR<b>2500</b>
                     
            </div>
        
            <div class="col-3 text-center">
        
        30 seats available<br>
        20 single
        <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
     <input type="hidden" name="source" value="<?php echo $_POST["source"]; ?>">
     <input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">
     <input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="departure" value="<?php echo $_POST["departure"]; ?>">
    <input type="hidden" name="name2" value="tsrtc">
    <input type="hidden" name="cost2" value="2500">
        <button type="submit" name="submit" id="submit1" class="one">Book Now</button>
        </div>

    </div>

    </div>
   
    </form>
    <form action="bus3.php" method="POST" enctype="multipart/form-data">

    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
        <div class="text_center">PRIMO TRAVELS</div>
        <img src="busbook.svg" alt="Girl in a jacket"> 
                </div>
        <div class="col-2 text-center">
        <h5>time 3:00 AM </h5>
            <br>
            <br>
            <small>Jaewaharlal Nehru street</small>  
                
            </div>
        <div class="col-2 text-center">
            starts from<br>
            INR<b>1800</b>
                     
            </div>
        
            <div class="col-3 text-center">
        
        17 seats available<br>
        6 single
        <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
     <input type="hidden" name="source" value="<?php echo $_POST["source"]; ?>">
     <input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">
     <input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="departure" value="<?php echo $_POST["departure"]; ?>">
    <input type="hidden" name="name3" value="primo travels">
    <input type="hidden" name="cost3" value="1800">
        <button type="submit" name="submit" id="submit1" class="one">Book Now</button>
        </div>

    </div>

    </div>
    </form>
    <form action="bus4.php" method="POST" enctype="multipart/form-data">
    <div class="container m-5">
    <div class="row  m-auto room-card py-5" >
        <div class="col-3">
        <div class="text_center">ASWATHI</div>
        <img src="bubook2.jpeg" alt="Girl in a jacket"> 
                </div>
        <div class="col-2 text-center">
        <h5>time 4:00 AM </h5>
            <br>
            <br>
            <small>rangabali Circle</small>  
                
            </div>
        <div class="col-2 text-center">
            starts from<br>
            INR<b>2800</b>
                     
            </div>
        
            <div class="col-3 text-center">
        
        19 seats available<br>
        14 single
        <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
     <input type="hidden" name="source" value="<?php echo $_POST["source"]; ?>">
     <input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">
     <input type="hidden" name="destination" value="<?php echo $_POST["destination"]; ?>">
     <input type="hidden" name="departure" value="<?php echo $_POST["departure"]; ?>">
    <input type="hidden" name="name4" value="aswathi">
    <input type="hidden" name="cost4" value="2800">
        <button type="submit" name="submit" id="submit1" class="one" >Book Now</button>
        </div>

    </div>

    </div>
    </form>


<div >
<h3 class="text-secondary">most frequently asked questions</h3>

    </div>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Can I book Tickets for infants
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Yes tou need to book your tickets for age aged people above 5</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        what is electronic ticket
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <strong>an electronic ticket is a paperless electronic document</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        what is the ticket booking process?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>for booking a train ticket through indian railways</strong> 
      </div>
    </div>
  </div>
</div>

<div class="text-center"><h4>Thank You For Your Visit!!</h4></div>
  
</body>

</html>