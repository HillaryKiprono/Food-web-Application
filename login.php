<?php 

session_start();
include 'config.php';
error_reporting(0);

 if (isset($_SESSION['username'])) {
    header("Location:DisplayFood.php");
 }

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password =$_POST['password'];

	$sql = "SELECT * FROM register_table WHERE email='$email'and password='$password'";
	$result = mysqli_query($conn, $sql);
	echo $result->num_rows;
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		
		header('refresh:0;url=DisplayFood.php');
		
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		 header('refresh:0;url=login.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form </title>
</head>
<style>

body
      {
        background-image: url("https://images.unsplash.com/photo-1594179047519-f347310d3322?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZmFzdCUyMGZvb2R8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80");
      
      }
</style>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p >Don't have an account? <a href="signup.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>