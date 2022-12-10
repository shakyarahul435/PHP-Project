
<?php 
include 'connect.php' ;
if(isset($_POST['done'])){

	$id=$_GET['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jewelry=$_POST['jewelry'];
	$email=$_POST['email'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	$mobilenumber= $_POST['mobilenumber'];

	$q = "update crudtable set id=$id, username='$username', password='$hashed_password' ,jewelry='$jewelry' ,email='$email' ,mobilenumber='$mobilenumber' where id=$id";
	$query=mysqli_query($con,$q);
	header('location:display.php');

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
<body>
<div class="col-lg-6 m-auto">
	<form method="post">
		<div class="card">
			<div class="card-header">
				<h1 class="text-black"> Update Operation</h1>

			</div>
			<br>
			<label>Username</label>
			<input type="text" name="username" class="form-control" required><br>

			<label>Password</label>
			<input type="text" name="password" class="form-control" required><br>

			<label>Jewelry</label>
			<input type="text" name="jewelry" class="form-control" required><br>

			<label>Email</label>
			<input type="email" name="email" class="form-control" required><br>

			<label>Mobile Number</label>
			<input type="Number" name="mobilenumber" class="form-control" required><br>



			<button class="btn btn-success" type="submit" name="done">Submit</button>
		</div>

		
	</form>
</div>
</body>
</html>
