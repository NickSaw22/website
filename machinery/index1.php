<!DOCTYPE html>
<html lang="en">
<head>
  <title>index1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=s"#">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="indad.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
      <li class="nav-item active">
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
	<br>
	<h1 class="text-white bg-dark text-center">
		Work We Do
	</h1>
	<div class="col-lg-8 m-auto d-block">
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="work">WORK</label>
			<input type="text" name="work" id="work" class="form-control">
		</div>

		<div class="form-group">
			<label for="description">DESCRIPTION</label>
			<textarea type="text" name="description" id="description" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="file">Photo</label>
			<input type="file" name="file" id="file" class="form-control">
		</div>

		<input type="submit" name="submit" value="Submit" class="btn btn-success">
	</form>
	</div>

</div>


<footer>
  <p class="p-3 bg-dark text-white text-center m-auto">ABCD company</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>