<!DOCTYPE html>
<html lang="en">
<head>
  <title>uploadmachineimg</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
	<?php include 'menu.php' ;?>
<br>
<br>
	<div class="container">
		<h1 class="text-center text-white bg-dark">MACHINERY WITH US</h1>
		<br>
		<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">

			<thead>
				<th>SrNo.</th>
				<th>IMAGE</th>
				<th>DESCRIPTION</th>
			</thead>

			<tbody>
				
				<?php

					$con=mysqli_connect('localhost','root');
					mysqli_select_db($con,'machinery');

					if(isset($_POST['submit'])){
						$files=$_FILES['file'];
						$description=$_POST['description'];
					
						//print_r($work);
						//echo "<br>";
						//print_r($description);
						// "<br>";
						//($files);


						$filename=$files['name'];
						$fileerror=$files['error'];
						$filetmp=$files['tmp_name'];


						$fileext=explode('.',$filename);
						$filecheck=strtolower(end($fileext));

						$fileextstored=array('png','jpg','jpeg');

						if(in_array($filecheck,$fileextstored)){

							$destinationfile ='upload/'.$filename;
							move_uploaded_file($filetmp, $destinationfile);

							$q="INSERT INTO `gallery`(`pic`, `description`) VALUES ('$destinationfile','$description')";
							$query=mysqli_query($con,$q);


							$displayquery ="select * from gallery";
							$querydisplay = mysqli_query($con,$displayquery);

							//$row = mysqli_num_roes($querydisplay);

							while ($result = mysqli_fetch_array($querydisplay)){

								?>

								<tr>
									<td><?php echo $result['id'];?></td>
									<td><img src ="<?php echo $result['pic'];?>" height="100px" width="100px"></td>
									<td><?php echo $result['description'];?></td>	
								</tr>

								<?php
							}


					}else{
						echo "Extension not valid!!";
					}
				}

				?>

			</tbody>

		</table>
	</div>
</div>
</body>
</html>