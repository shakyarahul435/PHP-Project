<?php
    
include("./backend/connect.php");
 session_start();
 
if(isset($_POST['login'])) {
	// $id=$_POST['id'];

	$email = $_POST['email'];

	$password = $_POST['password'];
$q =   "SELECT * FROM users WHERE  email='"
    . $email . "' AND
    password='" . md5($password) . "' ";

$query=mysqli_query($con,$q);
				$num = mysqli_fetch_array($query);


				// $result = mysqli_query($db, $sql) or die( mysqli_error($db));
    if($num ) {
        // $row = mysqli_fetch_array($sql);

		// $SESSION['firstname'] = $firstname;
		

        header("location:index.php");
 //        exit();
 //        $q = "select * from users where id=$id";
        
	// $query=mysqli_query($con,$q);
	// header('location:index.php');
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<script src="https://kit.fontawesome.com/17b6ff0f00.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="background"><script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	
	<div class="containerBox">
	<img src="images/visitingcard.jpg" width="250em" style="border-radius: 10px; position: relative; ">
	<form method="post" action="login.php">	
		<h2 class="webText"><u>--Web Shakya--</u></h2>
		<div class="leftAlign">
		<p><i class="fa-solid fa-user"> Email</i></p>
		<input type="email-input-field" name="email" class="email" id="email" placeholder="-Email Here" required><br>
		<!-- <input type="email" name="email" id="email" class="email" placeholder="-Username Here"> -->
		<br>
		<p><i class="fa-solid fa-lock"> Password</i></p>
		<input type="Password" id="password" name="password" class="password" placeholder="-Password Here" required>
		<i class="fa fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

		<p>
		<button id="buttonLog" onclick="pressed();" name="login"><b>Log In</b></button>
		<p><b><u>OR</u></b></p>
		<button id="buttonSign" onclick="location.href='signin.php'"><b>Sign In</b></button>
		<script type="text/javascript">
	
			function pressed(){
			// const email = document.getElementById('email');
			// const password = document.getElementById('password');

			
			
			if(email.value.length==0 || password.value.length==0){
				alert("Field cannot be empty.");
				return false;
			}
			// alert(email);
			return location.href='index.php';
			
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
		</form>	
		</p>
		</div>
	</div>


</body>
</html>