<?php
$db = 'std';
$con = new mysqli("localhost","root","anhdung0403",$db);
if($con->connect_error)
{
 die("connection failed ". $con ->connect_error);
}
?>
