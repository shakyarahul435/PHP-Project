
 <?php
include './backend/connect.php';
if(isset($_POST['done'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$location = $_POST['location'];
    $username = $_POST['username'];
    $password= md5($_POST['password']);
    $email= $_POST['email'];
    $mobilenumber= $_POST['mobilenumber'];
    

    $q = "INSERT INTO `users`(`firstname`, `lastname`, `location`, `username`, `password`,`mobilenumber`,`email`) VALUES ('$firstname','$lastname','$location','$username','$password','$mobilenumber','$email')";
    $query=mysqli_query($con,$q);
if($query){
	header("Location: login.php");
    }
}

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
	<script src="https://kit.fontawesome.com/17b6ff0f00.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="background-color-sign">
	
		<form method="post" action="signin.php">
		<div class="containerBoxSign">
		<h2 class="webText"><u>--Sign In--</u></h2>
		<div class="leftAlign">
			<p><i class="fa-solid fa-user"> First Name</i></p>
		<input type="text" name="firstname" id="firstname" class="firstname" placeholder="-First Name Here" required>
		<br>
		<p><i class="fa-solid fa-user"> Last Name</i></p>
		<input type="text" name="lastname" id="lastname" class="lastname" placeholder="-Last Name Here" required>
		<br>
		<p><i class="fa-solid fa-user"> Location</i></p>
		<input type="text" name="location" id="location" class="location" placeholder="-Location Here" required>
		<br>
		<p><i class="fa-solid fa-user"> Mobile Number</i></p>
		<input type="number" name="mobilenumber" id="mobilenumber" class="mobilenumber" placeholder="-Mobile Number Here" required>
		<br>
		<p><i class="fa-solid fa-lock"> Email</i></p>
		<input type="Email" id="email" name="email" class="email" placeholder="-Email Here" required><br>
		<p><i class="fa-solid fa-user"> Username</i></p>
		<input type="text" name="username" id="uname" class="email" placeholder="-Username Here" required>
		<br>
		<p><i class="fa-solid fa-lock"> Password</i></p>
		<input type="Password" id="password" name="password" class="password" placeholder="-Password Here" required>
		<i class="fa fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

		<p>
		<button id="buttonSign" onclick="pressed()" name="done"><b>Sign In</b></button>
		</form>
		<script type="text/javascript">
			/*alert("Field cannot be empty1");*/
			function pressed(){
			if(email.value.length==0 || firstname.value.length==0 || lastname.value.length==0 || location.value.length==0 || password.value.length==0 || mobilenumber.value.length==0 || email.value.length==0){
				alert("Field cannot be empty.");
				
			}else{
				return location.href='login.php';
			}
			}
			
			
			
		</script>
		<script>
			const togglePassword = document.querySelector('#togglePassword');
 		    const password = document.querySelector('#password');

 		togglePassword.addEventListener('click', function (e) {
  		  // toggle the type attribute
    	const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
   			 password.setAttribute('type', type);
    	// toggle the eye slash icon
  		  this.classList.toggle('fa fa-eye-slash');
		});
		</script>
		</p>
		</div>
	</div>
</body>
</html>