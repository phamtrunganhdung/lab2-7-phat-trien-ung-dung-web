<?php
$id = 1;
$name ="";
$numberofstaff = 1;

if(isset($_GET["id"]))
$id = $_GET["id"];
if(isset($_GET["Name"]))
$name = $_GET["Name"];
if(isset($_GET["NumberOfStaff"]))
$numberofstaff = $_GET["NumberOfStaff"];
?>

<!DOCTYPE HTML>
<html lang="es">
 <head>
 <meta charset="utf-8"/>
 <title>Edit Department</title>
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
crossorigin="anonymous">
<style>
    body{
        background-color: lightgray;
    }
</style>
 </head>
 <body>
 <div class="container">
 <h1>Edit Department</h1>
 <form action="../../index.php" method="get" class="col-lg-10">
 <div class="form-group">
 <label >Action</label>
 <input type="text" value="departedit" class="form-control" id="action" name="action" readonly>
 </div>
 <div class="form-group">
 <label >ID</label>
 <input type="text" value="<?php echo $id ?>" class="form-control" id="id" name="id" readonly>
 </div>
 <div class="form-group">
 <label >Name</label>
 <input type="text" value="<?php echo $name ?>" class="form-control" id="name" name="name">
</div>
<div class="form-group">
 <label >NumberOfStaff</label>
 <input type="text" value="<?php echo $numberofstaff ?>" class="form-control" id="numberofstaff" name="numberofstaff">
</div>
 <button type="submit" class="btn btn-success">Update</button>
 <button type="button" class="btn btn-danger" onclick="javascript: history.back(1)">Back</button>
 </form>
</div>
 </body>
</html>
