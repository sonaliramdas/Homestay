<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `tourist` WHERE `toid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewtourist.php';
	</script>";

}