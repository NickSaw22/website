<?php

if(isset($_POST['submit'])){
$target1= "clientlogo/".basename($_FILES['logo']['name']);
$target2= "clientimage/".basename($_FILES['wimage']['name']);
$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'machinery');

$cname= $_POST['cname'];
$logo= $_FILES['logo']['name'];
$des= $_POST['des'];
$wimage= $_FILES['wimage']['name'];
$type= $_POST['type'];
$query= "insert into client(cname,logo,des,wimage,type) values('$cname','$logo','$des','$wimage','$type')";

mysqli_query($con,$query);


if(move_uploaded_file($_FILES['logo']['tmp_name'],$target1)){
$msg ="yes";
}
else{
$msg ="nos";	
}
if(move_uploaded_file($_FILES['wimage']['tmp_name'],$target2)){
$msg ="yes";
}
else{
$msg ="nos";	
}
header("location:client.php");
		exit();
}

?>