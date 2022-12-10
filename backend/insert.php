<?php
include 'connect.php';
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $jewelry= $_POST['jewelry'];
    $mobilenumber= $_POST['mobilenumber'];
    

    $q = "INSERT INTO `crudtable`(`username`,'email', `password`,'jewelry','mobilenumber') VALUES ('$username','$email','$password','$jewelry','$mobilenumber')";
    $query=mysqli_query($con,$q);
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
  <link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
<div class="col-lg-6 m-auto">
	<form method="post">
		<div class="card">
			<div class="card-header">
				<h1 class="text-black"> Insert Operation</h1>

			</div>
			<br>
			<label>Username</label>
			<input type="text" name="username" class="form-control"><br>

			<label>Password</label>
			<input type="text" name="password" class="form-control"><br>
			
            <label for="jewelry">Jewelry</label>

            <select name="jewelry" id="jewelry">
              <option value="Ring">Ring</option>
              <option value="Necklace">Necklace</option>
              <option value="WeddingSet">Wedding Set</option>
              <option value="Tilhari">Tilhari</option>
            </select><br>

            <label>Email</label>
            <input type="email" name="email" class="form-control"><br>


			<button class="btn btn-success" type="submit" name="done">Submit</button>
		</div>

		
	</form>
</div>
</body>
</html>