<?php
include_once("connect.php");

if (!isset($_POST['email']) || !isset($_POST['password'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: admin.php');

	exit();
}


$email=$_POST['email'];
$password=$_POST['password'];


$q = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

 $query=mysqli_query($con,$q);

/*$row = mysqli_fetch_array($query);*/

/*$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);*/


/*if (count($arr_login) > 0) {

	foreach($arr_login as $val)
	{
	   $tmp_name= $val['name'];

	}*/



/*if (condition) {*/
	// code...

if(isset($_POST['submit'])){
    echo $email;
    if($email=="admin@gmail.com" && $password=="admin"){
        header('location: display.php');
    }else{

        header('location: admin.php');
   
      
        
    }
}
/*	if($email="admin@gmail.com" && $password="admin"){

	session_start();
    $_SESSION['username']=$tmp_name;
    $_SESSION['msg']="Logged In Successfully!";
    header('location: display.php');
	
} else {
	session_start();
	$_SESSION['msg']="Invalid Credentials!";
	header('location: admin.php');
}*/



?>