<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'lat_crud_db';
$databaseUsername = 'nura';
$databasePassword = '';
 
$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>