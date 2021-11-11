<!DOCTYPE html>
<html lang="en">
<?php
 include 'hangsua.php'; 
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
<style>
    body{
        background-color: darkgray;
    }
</style>
<body>
<div class="container text-center">
 <h1>Hãng sữa</h1>
 <h3><a href="index.php">Home</a></h3>
 <br>
 <table class="table table-dark">
 <thead>
 <tr>
 <th>Mã HS</th>
 <th>Tên HS</th>
 <th>Địa chỉ</th>
 <th>Số điện thoại</th>
 <th>Email</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $hs = new HangSua("qlsua");
 $result = $hs->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MaHS']."</td>";
 echo "<td>".$row['TenHS']."</td>";
 echo "<td>".$row['DiachiHS']."</td>";
 echo "<td>".$row['SDTHS']."</td>";
 echo "<td>".$row['Email']."</td>";
 echo "<td><a href='delhs.php?MaHS=".$row['MaHS']."'>
 <i class='fas fa-trash'></i>
 </a>
 <a href='ediths.php?MaHS=".$row['MaHS']."'>
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