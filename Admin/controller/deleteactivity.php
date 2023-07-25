<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `activity` WHERE `acid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewactivity.php';
	</script>";

}