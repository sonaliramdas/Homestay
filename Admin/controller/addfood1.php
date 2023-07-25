<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];

	$package=$_POST['pack'];


	






    $imagename="upload/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
	
	

	$stmt=$admin->cud("INSERT INTO `food` (`foname`,`focategory`,`foimg`,`price`,`pid`) VALUES('$name','$desc','$imagename','$price','$package')","saved");


 echo"<script>
alert('Food added successfully');
window.location='../viewfood.php';

 	</script>";

}
?>

