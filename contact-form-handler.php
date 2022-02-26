<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number = $_POST['mobile'];
$to = "maleeshajayasinghe1004@gmail.com";
$subject = "Mail From InTaKe website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n  Contact number = ". $number;
$headers = "From: noreply@intake.com" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:about.php");
?>