<?php
if(isset($_POST['submit'])){
$target= "mimages/".basename($_FILES['mimage']['name']);
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'machinery');
$mimage= $_FILES['mimage']['name'];
$mdes= $_POST['mdes'];

$query="insert into machine (mimage,mdesc) values('$mimage','$mdes')";
mysqli_query($con,$query);

if(move_uploaded_file($_FILES['mimage']['tmp_name'],$target)){
$msg ="yes";
}
else{
$msg ="no";	
}
header("location:machine.php");
		exit();

}
?>