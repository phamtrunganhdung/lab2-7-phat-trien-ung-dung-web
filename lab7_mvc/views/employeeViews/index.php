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
 <h1>Employees</h1>
 <p>
  <a href="views/employeeViews/addEmployee.php"><button type="button" class="btn btn-success">Add new employee</button></a> 
  <a href="index.php?action=departindex"><button type="button" class="btn btn-primary">Show departments</button></a></p>
 <table class="table table-hover table-dark">
 <thead>
 <tr>
 <th>Id</th>
 <th>Firstname</th>
 <th>Surname</th>
 <th>Email</th>
 <th>Phone</th>
 <th>DepartmentId</th>
 <th>Detail</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 foreach($data["ListEmp"] as $List){
 ?>
 <tr>
 <td><?php echo $List["id"] ?></td>
 <td><?php echo $List["Name"] ?></td>
 <td><?php echo $List["Surname"] ?></td>
 <td><?php echo $List["email"] ?></td>
 <td><?php echo $List["phone"] ?></td>
 <td><?php echo $List["departmentId"] ?></td>
 <td>
 <a href="index.php?action=empdetail&id=<?php echo $List["id"]?>">Detail</a>
 </td>
 <td>
 <a href="views/employeeViews/editEmployee.php?id=<?php echo $List["id"]?>
 &Name=<?php echo $List["Name"]?>
 &Surname=<?php echo $List["Surname"]?>
 &email=<?php echo $List["email"]?>
 &phone=<?php echo $List["phone"]?>
 &departmentId=<?php echo $List["departmentId"]?>"><i class='fas fa-edit'></i></a> / 
 <a href="index.php?action=empdelete&id=<?php echo $List["id"]?>"><i class='fa fa-trash'></i></a>
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
