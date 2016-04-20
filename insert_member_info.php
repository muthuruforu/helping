<?php 
error_reporting(0);
include_once("db.php"); 

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$mob_num=$_POST['mob_num'];
$email=$_POST['email'];
$msg=$_POST['msg'];

 $usercheck = $uname;

 $check = mysql_query("SELECT uname FROM member_reg WHERE uname = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);


if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email=="")
{
echo "<script type='text/javascript'>alert('Please fill all fields');window.location.href = 'member_registration.php';</script>";
}
elseif ($check2 != 0) {
	echo "<script type='text/javascript'>alert('Donar All ready registered successfully');window.location.href = 'index.php';</script>";
}


elseif($_POST['pass'] != $_POST['cpass']) {

 		die('Your passwords did not match. ');

 	}

else{

$sql="INSERT INTO member_reg (uname, pass,name,mob_num,e_mail,msg)
VALUES
('$uname','$pass','$name','$mob_num','$email','$msg')";
 mysql_query($sql) or die(mysql_error());

if($sql)
{
	echo "<script type='text/javascript'>alert('member registered successfully');window.location.href = 'index.php';</script>";
}


 }
?>
