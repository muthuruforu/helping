<?php
error_reporting(0);
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("bloodlist",$conn);
?>