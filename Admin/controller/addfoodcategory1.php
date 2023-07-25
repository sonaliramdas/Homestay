<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$desc=$_POST['desc'];

	






   
	

	$stmt=$admin->cud("INSERT INTO `foodcategory` (`fcname`,`fctype`) VALUES('$name','$desc')","saved");


 echo"<script>
alert('Food Category added successfully');
window.location='../addfoodcategory.php';

 	</script>";

}
?>

