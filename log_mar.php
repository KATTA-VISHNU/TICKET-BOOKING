<?php
echo $_POST['email'];
echo $_POST['password'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
//$conn=mysqli_connect("localhost","root","password","R190526_reg");
//$Email=mysqli_real_escape_string($conn,$_POST['email']);
//$Pass=mysqli_real_escape_string($conn,$_POST['password']);
//$que="select * from Information where Email=? and Password=?;";
echo $Email."<br>";
echo $Pass."<br>";
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$que)){

}
else{
    mysqli_stmt_bind_param($stmt,"ss",$Email,$Pass);
    mysqli_stmt_execute($stmt);
    $results=mysqli_stmt_get_result($stmt);
    $data=mysqli_num_rows($results);
    if($data<=0){
        header("Location:login_uncc.php");
    }
    else{
        session_start();
        $_SESSION['name']="user";
        header("Location:login_succ.html");
    }
}

}


?>