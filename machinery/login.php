<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="About-info.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="work.php">Work we do</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="client-info.php">Our clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="machine-info.php">Machine With Us</a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="login.php">ADMIN LOGIN</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">login</h2>
	</div>
	<div class="w-50 m-auto">
<form action="login.php" method="POST" enctype="multipart/form-data">

<label>USERNAME:</label>
<input type="text" name="uname" autocomplete="off" class="form-control"><br><br>
<label>PASSWORD:</label>
<input type="PASSWORD" name="pwd" autocomplete="off" class="form-control"><br><br>
<div>
	<button type="submit" name="submit" class="btn btn-success">Submit</button>
	<button type="reset" class="btn btn-primary">Reset</button>
</div>
</form>
</div>
</section>
<footer>
	<p class="p-3 bg-dark text-white">xyz company</p>
</footer>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];

	if($uname=='uname' && $pwd=='pwd'){
		header("location:indad.php");
		exit();

	}
	else{

		echo "invalid";
	}
}


?>


