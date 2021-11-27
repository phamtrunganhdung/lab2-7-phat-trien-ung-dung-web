<!DOCTYPE HTML>
<html lang="es">
 <head>
 <meta charset="utf-8"/>
 <title>Lab7_PHP_MVC</title>
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
crossorigin="anonymous">
<style>
    body{
        background-color: lightgray;
    }
    .fa-edit{
        color: #00CC33;
    }
    .fa-trash{
        color: #FF3333;
    }
</style>
 </head>
 <body>
 <div class="container-fluid">
 <h1>Departments</h1>
 <p>
  <a href="views/departmentViews/addDepartment.php"><button type="button" class="btn btn-success">Add new department</button></a> 
  <a href="index.php"><button type="button" class="btn btn-primary">Show employees</button></a></p>
 <table class="table table-hover table-dark">
 <thead>
 <tr>
 <th>Id</th>
 <th>Name</th>
 <th>Number Of Staff</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 foreach($data["ListDepart"] as $List){
 ?>
 <tr>
 <td><?php echo $List["id"] ?></td>
 <td><?php echo $List["Name"] ?></td>
 <td><?php echo $List["NumberOfStaff"] ?></td>
 <td>
 <a href="views/departmentViews/editDepartment.php?id=<?php echo $List["id"]?>
 &Name=<?php echo $List["Name"]?>
 &NumberOfStaff=<?php echo $List["NumberOfStaff"]?>"><i class='fas fa-edit'></i></a> / 
 <a href="index.php?action=departdelete&id=<?php echo $List["id"]?>"><i class='fa fa-trash'></i></a>
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
</div>
 </body>
</html>
