<?php 
$con = mysql_connect("localhost","nura",""); 
if (!$con) 
 { 
 die('Could not connect: ' . mysql_error()); 
 } 
mysql_select_db("lat_dbase", $con); 
$sql="INSERT INTO tbl_mhs (FirstName, LastName, Age)