<!DOCTYPE HTML>
<html lang="es">
 <head>
 <meta charset="utf-8"/>
 <title>Add Department</title>
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
 <h1>Add Department</h1>
 <form action="../../index.php" method="get" class="col-lg-10">
 <div class="form-group">
 <label >Action</label>
 <input type="text" value="departadd" class="form-control" id="action" name="action" readonly>
 </div>
 <div class="form-group">
 <label >ID</label>
 <input type="text" placeholder="Auto" class="form-control" id="id" name="id" readonly>
 </div>
 <div class="form-group">
 <label >Name</label>
 <input type="text" placeholder="Employee Name" class="form-control" id="name" name="name">
</div>
<div class="form-group">
 <label >Number Of Staff</label>
 <input type="text" placeholder="Number of staff" class="form-control" id="numberofstaff" name="numberofstaff">
</div>
 <button type="submit" class="btn btn-success">Add</button>
 <button type="button" class="btn btn-danger" onclick="javascript: history.back(1)">Back</button>
 </form>
</div>
 </body>
</html>
