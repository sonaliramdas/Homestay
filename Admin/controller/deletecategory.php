<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `category` WHERE `cid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewcategory.php';
	</script>";

}