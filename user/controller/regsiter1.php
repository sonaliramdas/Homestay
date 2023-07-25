<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];




	






   
	
	

	$stmt=$admin->cud("INSERT INTO `user` (`uname`,`uemail`,`upassword`,`uphone`,`uaddress`) VALUES('$name','$email','$pass','$phone','$address')","saved");


 echo"<script>
alert('Registred  successfully');
window.location='../index.php';


 	</script>";

}
?>

