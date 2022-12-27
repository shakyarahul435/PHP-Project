
<?php 
session_start();
include 'connect.php' ;
if(isset($_POST['done'])){

	$id=$_GET['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jewelry=$_POST['jewelry'];
	$email=$_POST['email'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	$mobilenumber= $_POST['mobilenumber'];
	$comment= $_POST['comment'];

	$q = "update crudtable set id=$id, username='$username', password='$hashed_password' ,jewelry='$jewelry' ,email='$email' ,mobilenumber='$mobilenumber'
	,comment='$comment' where id=$id";
	$query=mysqli_query($con,$q);
	header('location:display.php');
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update </title>
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
<?php
$id=$_GET['id'];

$qu = "select * from crudtable where id=$id";
				$query=mysqli_query($con,$qu);
while ($result = mysqli_fetch_array($query)) {
	// echo $id;
	// echo $result['email'];
	// echo $result['jewelry'];
	// echo $result['comment'];
?>
		
			<label>Email</label>
			<input type="email" name="email" class="form-control" readonly="true" value="<?php echo $result['email']; ?>" required><br>
			
			<label>Jewelry</label>
			<input type="text" name="jewelry" class="form-control" value="<?php echo $result['jewelry']; ?>" required><br>
			
			<label>Comment</label>
			<input type="text" name="comment" class="form-control" value="<?php echo $result['comment']; ?>" required><br>

			<?php } ?>

			<button class="btn btn-success" type="submit" name="done">Submit</button>
		</div>

		
	</form>
</div>
</body>
</html>
