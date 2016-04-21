<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Admin Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

<link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


<script>

	function myfunction(t)
	{
    $('#example').DataTable({
        "ajax": "vw_ajaxdonar.php?ajaxid="+t,
		 "bProcessing": true, 
		 "bServerSide": true,
		  "searching": true,
		"columns": [
            { "data": "donar_id" },
            { "data": "donar_name" },
            { "data": "donar_age" },
			{ "data": "donar_gender" },
			{ "data": "donar_dob" },
			{ "data": "donar_weight" },
            { "data": "donar_state" },
			{ "data": "donar_city" },
			{ "data": "donar_pincode" },
            { "data": "donar_mobile" },
            { "data": "donar_email" },
            { "data": "donar_bg" }
        ],
		"bDestroy": true
    });
	}	
</script>
</head>

<body>
<div class="banner1">
<!---<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="Admin.php">Admin Area </a>&gt; View Donors</div>

<br /><br /><br /><br /><br /></br></br></br>--->

                        <div id="tabsE">
                                <ul>
                                        <!-- CSS Tabs -->

<li><a href="vw_donors.php"><span>View Donors</span></a></li>
<li><a href="Admin_search.php"><span>View Member</span></a></li>
<li><a href="comments.php"><span>Comments</span></a></li>

                        </ul>
    </div>
  <!---  </div>
</div>--->
</div>
<div class="content">
<br /><br />
<div class="link">Quik Links<br />
  <div class="links">
  <ul>
  <li><a href="#"><span>About Us</span></a><br />
    <br />
  </li>
<li><a href="#"><span>Tips</span></a><br />
  <br />
</li>
<li><a href="#"><span>Eligibility<br />
  <br />
</span></a></li>
<li><a href="#"><span>Contact Us</span></a><br />
</li>
</ul>
  <p>&nbsp;</p>
  </div>
</div>
<br /><br /><br /><br /><br /><br /><div style="width:auto" id="apDiv1">
	<?php
	
		define('MAX_REC_PER_PAGE', 5);
		$db = mysqli_connect("localhost", "root", "", "bloodlist");
		//mysql_select_db("bloodlist");
		$rs = mysqli_query($db, "SELECT COUNT(*) FROM donar_list");
		list($total) = mysqli_fetch_row($rs);
		$total_pages = ceil($total / MAX_REC_PER_PAGE);
		$page = intval(@$_GET["page"]);
		
		if (0 == $page){
			$page = 1;
		}
		$start = MAX_REC_PER_PAGE * ($page - 1);
		$max = MAX_REC_PER_PAGE;
		$rs = mysqli_query($db,"SELECT * from donar_list LIMIT $start, $max");
	?>
<div class="donars">
<div class="donar_form">	
<form action="" method="post" id="myForm">
	Search By Group:<input type="text" name="name" id="name" placeholder="name" onkeyup="myfunction(this.value)">
</form>
</div>
<h1 style="color:grey">Blood Donars List:</h1>
	<!--<table border="1" width="100%" style="text-align:center">-->
	<table id="example" class="display" border="1" width="100%" style="text-align:center">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Dob</th>
			<th>Weight</th>
			<th>State</th>
			<th>City</th>
			<th>Pincode</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Blood Group</th>
		</tr>

		<?php
			while (list($donar_id,$donar_name, $donar_age,$donar_gender, $donar_dob, $donar_weight,$donar_state, $donar_city,$donar_pincode, $donar_mobile, $donar_email,$donar_bg ) = mysqli_fetch_row($rs)) {
		?>
				<tr>
					<td><?= htmlspecialchars($donar_id) ?></td>
					<td><?= htmlspecialchars($donar_name) ?></td>
					<td><?= htmlspecialchars($donar_age) ?></td>
					<td><?= htmlspecialchars($donar_gender) ?></td>
					<td><?= htmlspecialchars($donar_dob) ?></td>
					<td><?= htmlspecialchars($donar_weight) ?></td>
					<td><?= htmlspecialchars($donar_state) ?></td>
					<td><?= htmlspecialchars($donar_city) ?></td>
					<td><?= htmlspecialchars($donar_pincode) ?></td>
					<td><?= htmlspecialchars($donar_mobile) ?></td>
					<td><?= htmlspecialchars($donar_email) ?></td>
					<td><?= htmlspecialchars($donar_bg) ?></td>
				</tr>
		<?php
			}
		?>
	</table>
</div>
	<table border="0" cellpadding="5" align="center">
		<tr>
			<td>Pages:</td>
			<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt=$i;
					if ($page != $i)
						$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>";
			?>			
			<td align="center"><?= $txt ?></td>
			<?php
				}
			?>
		</tr>
	</table>
	
	</div>
<br /><br /><br /><br /><br />
</div>
<div class="bottom4" align="center">© Copyright 2015-2016. All rights are Reserved.</div>

</body>
</html>
