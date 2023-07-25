<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['pay']))
{
	$bid=$_POST['bid'];
	$amt=$_POST['amt'];
	$name=$_POST['name'];
	$cardno=$_POST['cnumber'];
	
    $exp=$_POST['expiry'];
    $cvv=$_POST['password'];
	$uid=$_SESSION['uid'];

$pstatus='paid';



	






   
	
	

	$stmt=$admin->cud("INSERT INTO `payment` (`book_id`,`card_number`,`expy`,`cvv`,`amount`,`cardname`,`total_pay`,`pstatus`,`paydate`,`uid`) VALUES('$bid','$cardno','$exp','$cvv','$amt','$name','$amt','$pstatus',now(),'$uid')","INSERTED");


 echo"<script>
alert('Paid  successfully');
window.location.href='../status.php';


 	</script>";

}
?>

