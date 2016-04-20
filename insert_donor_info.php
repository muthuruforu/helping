<?php 
if(isset($_POST['submit']))
{
include_once("dbconnect.php");

//$uname=$_POST['uname'];
//$pass=$_POST['pass'];
$name=$_POST['name'];
$age=$_POST['age'];
$gn=$_POST['gn'];
$dob=$_POST['dob'];
$weight=$_POST['weight'];
$bg=$_POST['bg'];
//$ldd=$_POST['ldd'];
$state=$_POST['state'];
$city=$_POST['city'];
$pc=$_POST['pc'];
$mob_num=$_POST['mob_num'];
$email=$_POST['email'];
//$msg=$_POST['msg'];



$sql="INSERT INTO donar_list (donar_name,donar_age,donar_gender,donar_dob,donar_weight,donar_state,donar_city,donar_pincode,donar_mobile,donar_email,donar_bg)
VALUES
('$name','$age','$gn','$dob','$weight','$state','$city','$pc','$mob_num','$email','$bg')";
//echo $sql; exit;
$result=mysqli_query($conn, $sql);

if($result)
{
	echo "<script type='text/javascript'>alert('Donar registered successfully');window.location.href = 'index.php';</script>";
}
}

?>
