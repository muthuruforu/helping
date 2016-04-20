<link href="Style.css" rel="stylesheet" type="text/css" />

<?php
include('dbconnect.php');




?><div id="apDiv10">
<h1 style="color:grey">Blood Donars List:</h1>
 <table border="1px">
<tr><th style="color:blue; text-transform:uppercase;">Name</th>
<th style="color:blue; text-transform:uppercase">Contact No</th>
<th style="color:blue; text-transform:uppercase">Email</th>
<th style="color:blue; text-transform:uppercase">Message</th>

</tr>
<?php
$val="Select *from member_reg";
$result = mysqli_query($conn, $val);
if(mysqli_num_rows($result)>0){
while($row = $result->fetch_object()){

?>
<tr>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->mob_num; ?></td>
<td><?php echo $row->e_mail; ?></td>
<td><?php echo $row->msg; ?></td>
</tr>
<?php
}
}

?>
</table>
</div>
   
    
 

