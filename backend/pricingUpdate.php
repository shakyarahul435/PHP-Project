
<?php 
session_start();
include 'connect.php' ;
if(isset($_POST['done'])){

	$id=$_GET['id'];
	$jewelry=$_POST['jewelry'];
    $weight=$_POST['weight'];
	$price= $_POST['price'];
	$description= $_POST['description'];

	$q = "update pricing set id=$id, jewelry='$jewelry' ,weight='$weight' ,price='$price' ,description='$description'  where id=$id";
	$query=mysqli_query($con,$q);
	header('location:pricingIndex.php');
	
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
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<button><a href="pricingIndex.php">Back </a></button>
<div class="col-lg-6 m-auto">
	<form method="post">
		<div class="card">
			<div class="card-header">
				<h1 class="text-black"> Update Operation</h1>

			</div>
			<br>
<?php
$id=$_GET['id'];

$qu = "select * from pricing where id=$id";
				$query=mysqli_query($con,$qu);
while ($result = mysqli_fetch_array($query)) {
	// echo $id;
	// echo $result['email'];
	// echo $result['jewelry'];
	// echo $result['comment'];
?>
			<label>Id: <u><?php echo $id; ?></u> </label>

			<label>Jewelry</label>
			<input type="text" name="jewelry" class="form-control" value="<?php echo $result['jewelry']; ?>" required><br>
			
			<label>Weight</label>
			<input type="text" name="weight" class="form-control" value="<?php echo $result['weight']; ?>" required><br>
			
			<label>Price</label>
			<input type="text" name="price" class="form-control" value="<?php echo $result['price']; ?>" required><br>

			<label>Image</label>
			<td><img   src="./uploads/<?php echo $result['imageupload']; ?>" alt="No Design" width="100" height="100" onclick="window.open(this.src)"></td>
			 
			<label>Description</label>
			<input type="text" name="description" class="form-control" value="<?php echo $result['description']; ?>" required><br>

			<?php } ?>

			<button class="btn btn-success" type="submit" name="done">Submit</button>
		</div>

		
	</form>
</div>
</body>
</html>
