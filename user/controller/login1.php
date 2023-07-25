<?php 
require '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];

$stmt=$admin->ret("SELECT * FROM `user` WHERE `uemail`='$email' AND `upassword`='$pass'");


$num = $stmt->rowCount();
if($num>0)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id= $row['uid'];
$_SESSION['uid']=$id;

echo $_SESSION['uid'];


   echo"<script>
	alert('Login successfull');
    window.location='../index.php';
	</script>";
}
else
{
	echo"<script>
	alert('You have entered wrong name');
    window.location.href='../login.php';
	</script>";
}

}
?>