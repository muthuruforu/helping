<?php 

include("db.php"); 

$nam=$_POST['nam'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact (name, mob_num, e_mail,message)
VALUES
('$nam','$mob','$email','$msg')";
 mysql_query($sql);
 if($sql){
	echo "<script type='text/javascript'>alert('Donar registered successfully');window.location.href = 'index.php';</script>";
}

?>