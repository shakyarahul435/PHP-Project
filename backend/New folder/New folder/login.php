<?php
	include "connect.php";

	$email = $_POST['emailcontroller'];
	$password = $_POST['passwordcontroller'];

	$sql=$con->query("select * from account where email='".$email."' and password='".$password."'");
	$data = array();
	while($row = $sql->fetch_assoc())
	{
		$data[] = $row;
	}
	echo json_encode($data);
?>


