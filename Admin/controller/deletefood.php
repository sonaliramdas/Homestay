<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `food` WHERE `foid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewfood.php';
	</script>";

}