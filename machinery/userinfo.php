<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection Sucessful";
}else{
	echo "No Connection";
}
mysqli_select_db($con, 'machinery');
$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$request =$_POST['request'];
$query=" insert into userinfodata (user, email, mobile, request) 
  		 values ('$user', '$email','$mobile','$request') ";

 mysqli_query($con,$query ); 

echo "$query";
header('location:index.php');
?>