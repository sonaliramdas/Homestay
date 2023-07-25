<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `package` WHERE `pid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewpackage.php';
	</script>";

}