<?php

if( isset($_POST['add']) ){
$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$phoneCode = $_POST['phoneCode'];
$phone= $_POST['phone'];

$sql = " INSERT INTO table1 (username,gender,email,address ,phoneCode,phone) VALUES ('$username'  ,'$gender' ,'$email' ,'$address', '$phoneCode' ,'$phone' )";


if(mysqli_query($conn , $sql)) {
 echo "<h2>Thank you for contacting us..we will reach you soon..!!</h2>";
} else{ 
  echo "Error:" .$sql."<br>" .mysqli_error($conn);
 }
}
?>
