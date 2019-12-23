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
		
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-info.php">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="work.php">Work We Do</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="client-info.php">Our Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="machine-info.php">Machinery With Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enquiry.php">Enquiry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">ADMIN LOGIN</a>
      </li>
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




	<br>
	<br>
		<div class="container">
			<h1 class="text-center text-white bg-dark">WORK WE DO</h1>
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



								$displayquery ="select * from wwd";
								$querydisplay = mysqli_query($con,$displayquery);

								//$row = mysqli_num_roes($querydisplay);

								while ($result = mysqli_fetch_array($querydisplay)){

									?>

									<tr>
										<td><?php echo $result['id'];?></td>
										<td><?php echo $result['work'];?></td>
										<td><?php echo $result['description'];?></td>
										<td><img src ="<?php echo $result['pic'];?>" height="100px" width="100px"></td>
									</tr>

									<?php
								}

					?>

				</tbody>

			</table>
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