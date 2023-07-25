<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$desc=$_POST['desc'];
	






    $imagename="upload/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
	
	

	$stmt=$admin->cud("INSERT INTO `gallery` (`gadesc`,`gaimg`) VALUES('$desc','$imagename')","saved");


 echo"<script>
alert('Galllery added successfully');
window.location='../viewgallery.php';

 	</script>";

}

