

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css" />
	<link rel="stylesheet" href="assets/css/Pricing-Tables-1.css" />
	<link rel="stylesheet" href="assets/css/Pricing-Tables.css" />
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<button><a href="index.php">Back </a></button>
<?php
session_start();
				include './backend/connect.php';

				
				$q = "select * from crudtable";			
				$query=mysqli_query($con,$q);

        // $que = "select * from pricing";			
				// $quer=mysqli_query($con,$que);
        // while ($results = mysqli_fetch_array($quer)) {
          
    

       
        while ($result = mysqli_fetch_array($query)) {
          // code...
         
          // if($result['jewelry'] == $results['jewelry']) {
 
         
          
          // }else{
          //   echo 'not yet';
          // } 

          // $_SESSION['em']=$result['email'];
          // echo $_SESSION['email'];
          // echo $_SESSION['em'];
          // echo $result['email'];

?>


<td><?php if ($result['email'] == $_SESSION['email']) {

?>

  <div class="card-deck">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <h2><th><u>Order</u></th></h2>
      <p>Email: <?php echo $result['email']; ?></p>
      <p>Design: <?php echo $result['jewelry']; ?></p>

      <!-- <?php
      echo $result['jewelry'].' ';
      echo $results['jewelry'];

      if($result['jewelry'] == $results['jewelry']) {
        echo 'test';
        ?>
        <p><img   src="./backend/uploads/<?php echo $result['imageupload']; ?>" alt="No Design" width="100" height="100" onclick="window.open(this.src)"></p>
      <?php
      } else {
        echo 'No design';
      } ?> -->

			<p><img   src="./uploads/<?php echo $result['imageUpload']; ?>" alt="No Design" width="100" height="100" onclick="window.open(this.src)"></p>
			<p>Comment: <?php echo $result['comment']; ?></p>
    </div>
  </div>
  </div>

 
  <?php
    } else {
      echo " ";
    }
  ?>





<?php
     } 
		

?>

  <!-- <div class="card bg-warning">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the second card</p>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the third card</p>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the fourth card</p>
    </div>
  </div> -->
  <h1 align="center">Contact R.P. Jewellers to remove cart!</h1>
  <h2 align="center">Phone: <u>9843578549</u></h2>
</body>
</html>