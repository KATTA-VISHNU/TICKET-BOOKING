<?php

$conn=mysqli_connect("localhost","root","","project");
$Email=mysqli_real_escape_string($conn,$_POST['email']);
$Phone=mysqli_real_escape_string($conn,$_POST['phone']);
$Pass1=mysqli_real_escape_string($conn,$_POST['password1']);
$Pass2=mysqli_real_escape_string($conn,$_POST['password2']);
echo $Email." ".$Phone." ".$Pass1." ".$Pass2 ;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$que="select * from 128login where Email=? and Phone=?;";

$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$que)){

}
else{
    mysqli_stmt_bind_param($stmt,"ss",$Email,$Phone);
    mysqli_stmt_execute($stmt);
    $results=mysqli_stmt_get_result($stmt);
    $data=mysqli_num_rows($results);
    if($data<=0){
        echo "invalid email and Phone";
    }
    else{
$stmt1=mysqli_stmt_init($conn);
$que2="update 128login set Password=? where Email=? and Phone=?;";
if(!mysqli_stmt_prepare($stmt1,$que2)){

}
else{
    mysqli_stmt_bind_param($stmt1,"sss",$Pass1,$Email,$Phone);
    mysqli_stmt_execute($stmt1);
    header("Location:vishnu1.html");
}   
        
    }
}

}
?>