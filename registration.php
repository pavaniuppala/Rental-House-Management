<?php 
session_start();
header('location:login.php'); #after registration stays in the same page
$con =mysqli_connect('localhost','pavani','pavani'); #connects to DB
mysqli_select_db($con,'connect');
$name=$_POST['user']; #selects value with name"user"
$pass=$_POST['password'];
$s="select * from users where name ='$name'";
$result=mysqli_query($con,$s); 
$num= mysqli_num_rows($result);
if ($num!==1){
    $reg="insert into users(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successfull";
}
?>