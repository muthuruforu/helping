<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<link href="Style.css" rel="stylesheet" type="text/css" />




<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php
if(isset($_POST['submit']))
{
 include('dbconnect.php');
 $bg=$_POST["bg"];

$sql="SELECT * FROM donar_list WHERE donar_bg like '%$bg%'    ";
 $result=mysqli_query($conn, $sql);
 


   while($row=mysqli_fetch_array($result))
   {
  //echo "<pre>"; print_r($row); exit;
  echo '<div class="nw">';
 
 echo '<table><tr ><td width="350"> Name</td>';
   echo '<td> '.$row['donar_name'].'</td>' ;
 echo '</tr>';
 echo '<tr><td>Age</td>';
   echo '  <td>'.$row['donar_age'].'</td>' ;
   echo '</tr>';
   echo '<tr><td>Gender</td>';
    echo ' <td> '.$row['donar_gender'] .'</td>';
   echo '</tr><tr><td>Blood Group</td>';
 
   echo ' <td> '.$row['donar_bg'].'</td>' ;
  
   echo '</table>';
    

    echo '</div>';
 echo '</br>';
 }

} 
   ?>