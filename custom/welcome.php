<?php

include 'connect.php';
session_start();// Starting Session 
$id=$_SESSION['id']; 


$res=mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
$row=mysqli_fetch_array($res);

echo "Welcome".' '.$row['first_name'];;

?>