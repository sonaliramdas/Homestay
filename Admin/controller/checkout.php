<?php
include '../../config.php';
$admin=new Admin();

$id=$_GET['id'];
$st=$admin->cud("UPDATE `booking` SET `book-status`='checked-in' WHERE `book_id`='$id'","saved");



echo"<script>
alert('Status Updated Successfully');
window.location='../booking.php';

 	</script>";
?>