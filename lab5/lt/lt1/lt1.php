<!DOCTYPE html>
<html>
<head>
<title>Create Database</title>
</head>
<body>
<?php
 $con = new mysqli("localhost","root","anhdung0403");
 if($con->connect_error)
 {
 die("connection failed ". $con ->connect_error);
 }
 else echo "Connection successed"."</br>";
 $query = "create database std";
 $crdb = $con->query($query);
 if($crdb)
 {
 echo "Database created successfully";
 }
 else {
 echo "Error creating database: ".$con->error ;
}
?>
</body>
</html>