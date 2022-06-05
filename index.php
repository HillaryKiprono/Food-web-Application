<!DOCTYPE html>
<html>

<head>

	<!-- Including the bootstrap CDN -->
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
</head>
<style>
        .navbar
        {
            border:5px solid #2c11f5;  
            
        }
      </style>
<body>

	<!-- Creating a navigation bar using the
		.navbar class of bootstrap -->
	<nav class="navbar navbar-expand-sm bg-light">
    <img src="logo.png" alt="" width="70" height="70">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="signup.php">
				Register
				</a>
			</li>
	
			<li class="nav-item">
				<a class="nav-link" href="help.php">
				Help
				</a>
			</li>
		</ul>
	</nav>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1594179047519-f347310d3322?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZmFzdCUyMGZvb2R8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt="First slide" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/fd2.jpg" alt="Second slide"width="500" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/fd3.jpg" alt="Third slide"width="500" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
