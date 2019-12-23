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
      <li class="nav-item">
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
      <li class="nav-item active">
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


<section class="my-5">
  <div class ="py-5">
    <h2 class="text-center">CONTACT US</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="mail_handler.php" method="post">
      <div class="form-group">
      <label>Username</label>
      <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Enter username:">
      </div>

      <div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter email id:">
      </div>
      <div class="form-group">
      <label>Mobile</label>
      <input type="text" name="phone" autocomplete="off" class="form-control" placeholder="Enter mobile no.:">
      </div>
      <div class="form-group">
      <label>Enquiry:</label><textarea type="text" name="msg" autocomplete="off" class="form-control"  placeholder="Enter your thoughts!!">
      </textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
    </form>
  </div>
</section>




<footer>
  <p class="p-3 bg-dark text-white text-center">ABCD company</p>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>