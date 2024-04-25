<?php $db= new mysqli('localhost','utqkdsjgz1ezi','dxrdkvr6rsvl','dbzop7x90qlkp4'); 
extract($_POST);
$nodue_id=$db->real_escape_string($nodue_id);
$status=$db->real_escape_string($status);
$sql=$db->query("UPDATE nodue_application SET status='$status' WHERE nodue_id='$nodue_id'");
echo 1;
?>