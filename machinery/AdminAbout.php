<?php

if(isset($_POST['submit'])){
$target= "images/".basename($_FILES['image']['name']);
$con= mysqli_connect('localhost','root'); 
mysqli_select_db($con,'machinery');
$image= $_FILES['image']['name'];
$des= $_POST['des'];
$query= "insert into about(image,des) values('$image','$des')";

mysqli_query($con,$query);



if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
$msg ="yes";
}
else{
$msg ="nos";	
}
header("location:About.php");
		exit();

}

?>