

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Pricing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<button><a href="display.php">Back </a></button>
<button><a href="pricingInsert.php">Add Jewelry</a></button>

<?php
include 'connect.php';
echo 'Jewelry Indexing: ';				
$q = "select * from pricing";
$query=mysqli_query($con,$q);
while ($result = mysqli_fetch_array($query)) {
    // code...


?>
<div class="container-fluid">
<div class="bg-success">
<table>
<div class="project-name"><span>Id: <?php echo $result['id']; ?></span></div>
<div class="project-name"><span><?php echo $result['jewelry']; ?></span></div>
<div class="project-name"><span>Weighting: <?php echo $result['weight']; ?> Tola</span></div>
<div class="project-name"><span>Price: Rs. <?php echo $result['price']; ?></span></div>
<td><img   src="./uploads/<?php echo $result['imageupload']; ?>" alt="No Design" width="100" height="100" onclick="window.open(this.src)"></td>
<div class="project-name"><span>Description: <?php echo $result['description']; ?></span></div>
<td><button class="btn-danger btn"><a href="deletePricing.php? id=<?php echo $result['id']; ?>"class="text-white">Delete</a>  </button></td>
<td><button class="btn-primary btn"><a href="pricingUpdate.php? id=<?php echo $result['id']; ?>"class="text-white">Update </a>  </button></td>
</table>
</div>
</div>
<br>
</body>
</html>

<?php
}  
?>