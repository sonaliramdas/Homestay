<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$desc=$_POST['desc'];

	$package=$_POST['pack'];

	






    $imagename="upload/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
	
	

	$stmt=$admin->cud("INSERT INTO `category` (`cname`,`cdesc`,`cimage`,`pid`) VALUES('$name','$desc','$imagename','$package')","saved");


 echo"<script>
alert('Category added successfully');
window.location='../viewcategory.php';

 	</script>";

}
?>

