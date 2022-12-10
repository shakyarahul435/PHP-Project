<?php
$dns='mysql:host=localhost;dbname=id19151540_flutter';
$user= 'id19151540_account';
$pass= 'ivc0!)m7+9[!io}N';
try{
	$db = new PDO ($dns, $user, $pass);
	echo 'connected';
}
catch(PDOException $e){
	$error = $e->getMessege();
	echo $error;
}
?>