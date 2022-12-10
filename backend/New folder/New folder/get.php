<?php
require_once('connect.php');
// $email = $_POST['_emailcontroller'];
// $password = $_POST['_passwordcontroller'];

$query = 'select * from account where email="rpjewellers@gmail.com" and password="rp123"';
//  where email="$email" and password="$password" where email="$email" and password="$password"
$stm = $db->prepare($query);
$stm ->execute();
$row = $stm->fetch(PDO::FETCH_ASSOC);
echo json_encode($row);
?>
