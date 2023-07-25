<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$desc=$_POST['desc'];



	






    $imagename="upload/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
	
	

	$stmt=$admin->cud("INSERT INTO `tourist` (`toplace`,`toaddress`,`toimg`) VALUES('$name','$desc','$imagename')","saved");


 echo"<script>
alert('Tourist  Place Added successfully');
window.location='../viewtourist.php';

 	</script>";

}
?>

