<?php
$empname=$_POST['empname'];
$empcode=$_POST['empcode'];
$otp=$_POST['otp'];

//database connection
$conn=new mysqli('localhost','root','','feel');
if($conn -> connect_error){
    die('Connection failed :'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into access(empcode,empname,otp) values(?,?,?)");
    $stml->bind_param("isi",$empcode,$empname,$otp);
    echo "Access requested";
    $stml->close();
    $conn->close();
}




?>