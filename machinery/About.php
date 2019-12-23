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
  <a class="navbar-brand" href="#">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="indad.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index1.php">Work We Do</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="client.php">Our Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="machine.php">Machinery With Us</a>
      </li>
     </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php">
           <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">LogOut</button>
    </form>
  </div>
</nav>

<div class="container">
<section class="my-5">
	<div class="py-5">
        <h1 class="text-white bg-dark text-center">
      About US  </h1>
	</div>
	<div class="w-50 m-auto">
<form action="AdminAbout.php" method="POST" enctype="multipart/form-data">

<label>Image:</label>
<input type="file" name="image" autocomplete="off" class="form-control"><br><br>
<label>Description:</label>
<textarea name="des" cols="50" rows="4" placeholder="enter the description" autocomplete="off" class="form-control"></textarea><br>
<div>
	<button type="submit" name="submit" class="btn btn-success">Submit</button>
	<button type="reset" class="btn btn-primary">Reset</button>
</div>
</form>
</div>
</section>
</div>
<footer>
	<p class="p-3 bg-dark text-white">xyz company</p>
</footer>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	
</body>
</html>