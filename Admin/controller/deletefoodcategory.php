<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `foodcategory` WHERE `fcid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../viewfoodcategory.php';
	</script>";

}