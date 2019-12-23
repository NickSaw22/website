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
	<?php include 'menu.php' ;?>
<br>
<br>
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

							$q="INSERT INTO `wwd`(`work`, `description`, `pic`) VALUES ('$work','$description','$destinationfile')";
							$query=mysqli_query($con,$q);


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


					}else{
						echo "Extension not valid!!";
					}
					header("location:index1.php");
					exit();

				}

				?>

			</tbody>

		</table>
	</div>
</div>
</body>
</html>