<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];

if($uname=='admin' and $pass=='admin')
{
header ('location: Admin.php');
}
else {
	

{
	echo "<script type='text/javascript'>alert('Invalid UserName And Password');window.location.href = 'index.php';</script>";
}
}

?>