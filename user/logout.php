<?php
include '../config.php';
$admin=new Admin();
session_destroy();
unset($_SESSION['uid']);
echo "<script>
alert('Logout Successfull');
window.location='../user/login.php';

</script>";
?>