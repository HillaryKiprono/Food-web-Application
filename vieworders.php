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
            border:5px solid #ede247;  
            
        }
      </style>
<body>

	<!-- Creating a navigation bar using the
		.navbar class of bootstrap -->
	<nav class="navbar navbar-expand-sm bg-light">
    <img src="image/logo.png" alt="" width="70" height="70">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
            <a class="nav-link" href="adminLogin.php">Add Food</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">
				Logout
				</a>
			</li>
	
			<li class="nav-item">
				<a class="nav-link" href="help.php">
				Help
				</a>
			</li>
		</ul>
	</nav>
  <table class="table">
  <thead>
    <tr>
<th>ID</th>
<th>Name</th>
<!-- <th>email</th> -->
<th>phone</th>
<th>products</th>
<th>amount_paid</th>
<!-- <th>food Name</th> -->
 <!-- <th colspan=2 align="center">ACTION</th> -->
</tr></thead><tbody>
<?php
include 'config.php';
$qry="select * from orders";
$recset=mysqli_query($conn,$qry);
while ($row=mysqli_fetch_array($recset))
{
      echo "<td>";
      echo $row["id"];
      echo "</td>";
      echo "<td>";
      echo $row["name"];
       
    //   echo "</td>";
    //   echo "<td>";
    //   echo $row["email"];

      echo "</td>";
      echo "<td>";
      echo $row["phone"];

      echo "</td>";
      echo "<td>";
      echo $row["products"];

      echo "</td>";
      echo "<td>";
      echo $row["amount_paid"];
      echo "</td>";
      $id=$row["id"];
      echo "<td>";
      // echo "<a href='delete.php?key=?'>DELETE</>";
      // echo "</td>";
   
       echo "</td></tr>";
}         
?>
</tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

























<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

