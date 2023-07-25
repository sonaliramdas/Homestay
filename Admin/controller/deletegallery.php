<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `gallery` WHERE `gaid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewgallery.php';
    
	</script>";

}