<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
    $uid=$_SESSION['uid'];
    $id=$_POST['pid'];
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$np=$_POST['people'];


    $now = strtotime($date1); // or your date as well
    $your_date = strtotime($date2);
    $datediff1 = $your_date -  $now;

    $datediff = round($datediff1 / (60 * 60 * 24));
    $total_pay = 






	
	

	$stmt=$admin->ret("SELECT * FROM `package` WHERE `pid`='$id'");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
   $pprice=$row['pprice'];
   $calc_pay = $pprice * $datediff;

   $total_pay = $calc_pay * $np;

   

   $booking_status = 'booked';
   $query_1 = $admin->cud("INSERT INTO `booking`(`package_id`,`user_id`,`book_date`,`book-status`,`to_date`,`day`,`people`,`total_pay`,`etime`) VALUES('$id','$uid','$date1','$booking_status','$date2','$datediff','$np','$total_pay',now())","INSERTED");
   $query_2 = $admin->ret("SELECT * FROM `booking` WHERE `user_id`='$uid' AND `book-status`='$booking_status'");
   $row1=$query_2->fetch(PDO::FETCH_ASSOC);
   $bid=$row1['book_id'];

   echo "<script>alert('packages are booked');
   window.location='../payment.php?bid=$bid&amt=$total_pay';
   </script>";
    }


 
}
?>

