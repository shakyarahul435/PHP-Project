
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<h1 class="text-warning text-center"> Display Table Data</h1>
			<button><a href="users.php">Users</a></button>
			<button><a href="pricingIndex.php">Price Index</a></button>
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<th>Id</th>
					<th>Username</th>
					<th>Email</th>
					<!-- <th>Password</th> -->
					<th>Jewelry</th>
					<th>Mobile Number</th>
					<th>Image</th>
					<th>Comment</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
			<?php
			session_start();
			
				include 'connect.php';

				
				$q = "select * from crudtable";
				$query=mysqli_query($con,$q);
				while ($result = mysqli_fetch_array($query)) {
					// code...
					// $jewelry=$result['jewelry']= $_SESSION['$jewleyDetails'];
					// echo $_SESSION['$jewleyDetails'];
					// echo $jewelry;

					$_SESSION['$jewleyDetails']=$result['jewelry'];
					$_SESSION['em']=$result['email'];
					
					
					$_SESSION['$comment']=$result['comment'];
					
					
			?>

				<tr class="text-center">
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['username']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<!-- <td><?php echo $result['password']; ?></td> -->
					<td><?php echo $result['jewelry']; ?></td>
					<td><?php echo $result['mobilenumber']; ?></td>
					<!-- <td><img   src="../uploads/<?php echo $result['imageUpload'];  ?>" width="100" height="100"></td> -->
					<td><img   src="../uploads/<?php echo $result['imageUpload']; ?>" alt="No Design" width="100" height="100" onclick="window.open(this.src)"></td>
					<td><?php echo $result['comment']; ?></td>
					
					<td><button class="btn-danger btn"><a href="delete.php? id=<?php echo $result['id']; ?>"class="text-white">Delete</a>  </button></td>
					<td><button class="btn-primary btn"><a href="update.php? id=<?php echo $result['id']; ?>"class="text-white">Update </a>  </button></td>
					
				</tr>
				<?php
			}

				?>
			</table>
		</div>
	</div>

</body>
</html>
