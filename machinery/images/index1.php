<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>
	
<?php include 'menu.php' ;?>

<div class="container">
	<br>
	<h1 class="text-white bg-dark text-center">
		Upload new data
	</h1>
	<div class="col-lg-8 m-auto d-block">
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="work">WORK</label>
			<input type="text" name="work" id="work" class="form-control">
		</div>

		<div class="form-group">
			<label for="description">DESCRIPTION</label>
			<input type="text" name="description" id="description" class="form-control">
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
  <p class="p-3 bg-dark text-white text-center">ABCD company</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>