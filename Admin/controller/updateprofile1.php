<?php
include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$id=$_POST['aid'];

	$pass=$_POST['password'];	
	$phone=$_POST['phone'];	


		
		
		
		

		$target="upload/";
	$image=$target.basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $image);


    $stmt=$admin->cud("UPDATE `admin` SET `aname`='$name',`aemail`='$email',`apassword`='$pass',`phone`='$phone',`img`='$image' WHERE `aid`='$id'","updated");
    echo "<script> alert('Profile Upadted Succesfully');
    window.location='../profile.php';
    </script>";


}
?>
