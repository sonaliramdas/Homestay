<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$desc=$_POST['desc'];
	echo $price=$_POST['price'];


	






    $imagename="upload/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
	
	

	$stmt=$admin->cud("INSERT INTO `package` (`pname`,`pdesc`,`pimg`,`pprice`) VALUES('$name','$desc','$imagename','$price')","saved");


 echo"<script>
alert('Package added successfully');
window.location='../addpackages.php';

 	</script>";

}
?>

