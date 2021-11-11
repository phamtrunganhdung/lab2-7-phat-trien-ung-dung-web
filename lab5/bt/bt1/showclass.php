<!DOCTYPE html>
<html lang="en">
<?php
 include 'student.php'; include 'class.php';
?>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
crossorigin="anonymous">
 <title>Document</title>
</head>
<body>
<div class="container">
 <h2>Quản lý Lớp</h2>
 <table class="table table-dark">
 <thead>
 <tr>
 <th>Mã Lớp</th>
 <th>Tên lớp</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $cls = new Lop("qlsinhvien");
 $result = $cls->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MaLop']."</td>";
 echo "<td>".$row['TenLop']."</td>";
 echo "<td><a href='delclass.php?MaLop=".$row['MaLop']."'>
 <i class='fas fa-trash'></i>
 </a>
 <a href='editclass.php?MaLop=".$row['MaLop']."'>
 <i class='fa fa-edit'></i>
 </a>

 </td>";
 echo "</tr>";
 }
 ?>
 </tbody>
 </table>
</div>
</body>
</html>