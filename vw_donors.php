<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Admin Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

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
<br /><br /><br /><br /><br /><br /><div style="width:700px" id="apDiv1">
	<?php
	
		define('MAX_REC_PER_PAGE', 5);
		$db = mysql_connect("localhost", "root", "") or die("Couldn't connect to db!");
		mysql_select_db("bloodlist") or die("Couldn't select db!");
		$rs = mysql_query("SELECT COUNT(*) FROM donar_list") or die("Count query error!");
		list($total) = mysql_fetch_row($rs);
		$total_pages = ceil($total / MAX_REC_PER_PAGE);
		$page = intval(@$_GET["page"]);
		
		if (0 == $page){
			$page = 1;
		}
		$start = MAX_REC_PER_PAGE * ($page - 1);
		$max = MAX_REC_PER_PAGE;
		$rs = mysql_query("SELECT * from donar_list LIMIT $start, 
		$max") or die("donar_list query error!");
	?>
<h1 style="color:grey">Blood Donars List:</h1>
	<table border="1" width="100%" style="text-align:center">
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
			while (list($donar_id,$donar_name, $donar_age,$donar_gender, $donar_dob, $donar_weight,$donar_state, $donar_city,$donar_pincode, $donar_mobile, $donar_email,$donar_bg ) = mysql_fetch_row($rs)) {
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
