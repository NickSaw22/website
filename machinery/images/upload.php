<!DOCTYPE html>
<html lang="en">
<head>
  <title>upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

	<div class="container">
		<h1 class="text-center text-white bg-dark">WWD</h1>
		<br>
		<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">

			<thead>
				<th>SrNo.</th>
				<th>WORK</th>
				<th>DESCRIPTION</th>
				<th>IMAGE</th>
			</thead>

			<tbody>
				
				<?php

					$con=mysqli_connect('localhost','root');
					mysqli_select_db($con,'machinery');

					if(isset($_POST['submit'])){
						$work=$_POST['work'];
						$description=$_POST['description'];
						$files=$_FILES['file'];
					
						print_r($work);
						echo "<br>";
						print_r($description);
						echo "<br>";
						print_r($files);
					}

				?>

			</tbody>

		</table>
</body>
</html>