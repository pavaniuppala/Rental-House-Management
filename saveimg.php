<?php 
// echo "pavani";
 session_start();
   $con =mysqli_connect('localhost','pavani','pavani'); #connects to DB
   mysqli_select_db($con,'connect');
   $name=$_POST['url'];
   $cname=$_POST['name']; #selects value with name user
   $call=$_POST['phone'];
   $loca=$_POST['location'];
   $room=$_POST['number'];
   $price=$_POST['cost'];
    $reg="insert into links(URL,cname,phone,area,count,cost) values ('$name','$cname','$call','$loca','$room','$price')";
    mysqli_query($con,$reg);
    header('location:vis.php');
?>