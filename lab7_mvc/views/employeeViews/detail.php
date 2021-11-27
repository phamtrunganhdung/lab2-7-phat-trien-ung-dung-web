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
 <h1>Employees details</h1>
 <br>
 <table class="table table-hover table-dark">
 <thead>
 <tr>
 <th>Id</th>
 <th>Full name</th>
 <th>Email</th>
 <th>Phone</th>
 <th>Department Id</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <tr>
     <td><?php echo $data["emp"]->id ?></td>
     <td><?php echo $data["emp"]->Surname.$data["emp"]->Name ?></td>
     <td><?php echo $data["emp"]->email ?></td>
     <td><?php echo $data["emp"]->phone ?></td>
     <td><?php echo $data["emp"]->departmentId ?></td>
 <td>
 <a href="views/employeeViews/editEmployee.php?id=<?php echo $data["emp"]->id?>
 &Name=<?php echo $data["emp"]->Name?>
 &Surname=<?php echo $data["emp"]->Surname?>
 &email=<?php echo $data["emp"]->email?>
 &phone=<?php echo $data["emp"]->phone?>
 &departmentId=<?php echo $data["emp"]->departmentId?>"><i class='fas fa-edit'></i></a> / 
 <a href="index.php?action=empdelete&id=<?php echo $data["emp"]->id?>"><i class='fa fa-trash'></i></a>
 </td>
 </tr>
 </tbody>
 </table>
 <button type="button" class="btn btn-danger" onclick="javascript: history.back(1)">Back</button>
</div>
 </body>
</html>
