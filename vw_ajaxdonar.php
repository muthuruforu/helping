<?php
$id=$_GET['ajaxid'];
	//echo "<script type='text/javascript'>alert('ok');</script>";
	$conn=mysqli_connect("localhost", "root", "", "bloodlist");
	$sql="select * from donar_list where donar_city like '%$id%'";
	$res=mysqli_query($conn, $sql);
	if ($res->num_rows > 0) 
	{
		$data="";
		while($row=mysqli_fetch_assoc($res))
		{
			if ($data != "") {$data .= ",";}
			$data .= '{"donar_id":"'  . $row["donar_id"] . '",';
			$data .= '"donar_name":"'  . $row["donar_name"] . '",';
			$data .= '"donar_age":"'   . $row["donar_age"]        . '",';
			$data .= '"donar_gender":"'  . $row["donar_gender"] . '",';
			$data .= '"donar_dob":"'  . $row["donar_dob"] . '",';
			$data .= '"donar_weight":"'  . $row["donar_weight"] . '",';
			$data .= '"donar_state":"'  . $row["donar_state"] . '",';
			$data .= '"donar_city":"'  . $row["donar_city"] . '",';
			$data .= '"donar_pincode":"'  . $row["donar_pincode"] . '",';
			$data .= '"donar_mobile":"'  . $row["donar_mobile"] . '",';
			$data .= '"donar_email":"'  . $row["donar_email"] . '",';
			$data .= '"donar_bg":"'  . $row["donar_bg"] . '"}';
		}
	}
echo $data ='{"data":['.$data.']}';
?>