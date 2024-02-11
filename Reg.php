<?php
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['date']."<br>";
    echo $_POST['country']."<br>";
    echo $_POST['password1']."<br>";
    echo $_POST['password2'];
    
    if($conn=mysqli_connect("localhost","root","","project")){
        echo "success";
    }
    else{
        echo "un success";
    }
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $date=mysqli_real_escape_string($conn,$_POST['date']);
    $country=mysqli_real_escape_string($conn,$_POST['country']);
    $password=mysqli_real_escape_string($conn,$_POST['password1']);
    echo "<br>".$name;
    echo "<br>".$email;
    echo "<br>".$phone;
    echo "<br>".$date;
    echo "<br>".$country;
    echo "<br>".$password;
    $query1="select * from 128login where email=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$query1)){

    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $data=mysqli_num_rows($result);
        echo "<br>".$data."<br>";
        if($data>0){
            echo "unsuccess";
        }
        else{
        
            echo "succ";
        }
    }
   // $query2="insert into Information values('$name','$email','$date','$country','$password')";
    $stmt1=mysqli_stmt_init($conn);
    $query3="insert into 128login values(?,?,?,?,?,?);";
    if(!mysqli_stmt_prepare($stmt1,$query3)){

    }
    else{
        mysqli_stmt_bind_param($stmt1,"ssssss",$name,$email,$phone,$date,$country,$password);
        mysqli_stmt_execute(($stmt1));
       // header("Location:vishnu1.html");
       echo "successssss";
        
    }

?>