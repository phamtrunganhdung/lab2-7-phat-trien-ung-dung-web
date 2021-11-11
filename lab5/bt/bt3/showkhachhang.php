<!DOCTYPE html>
<html lang="en">
<?php
 include 'khachhang.php'; 
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
    .btn{
        width: 300px;
    }
</style>
<body>
<div class="container text-center">
 <h1>Khách hàng</h1>
 <h3><a href="index.php">Home</a></h3>
 <br>
 <table class="table table-dark">
 <thead>
 <tr>
 <th>Mã KH</th>
 <th>Tên KH</th>
 <th>Giới tính</th>
 <th>Địa chỉ</th>
 <th>Số điện thoại</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $kh = new KhachHang("qlsua");
 $result = $kh->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MaKH']."</td>";
 echo "<td>".$row['TenKH']."</td>";
 echo "<td>".$row['GioiTinh']."</td>";
 echo "<td>".$row['DiaChiKH']."</td>";
 echo "<td>".$row['SDTKH']."</td>";
 echo "<td><a href='delkh.php?MaKH=".$row['MaKH']."'>
 <i class='fas fa-trash'></i>
 </a>
 <a href='editkh.php?MaKH=".$row['MaKH']."'>
 <i class='fa fa-edit'></i>
 </a>

 </td>";
 echo "</tr>";
 }
 ?>
 </tbody>
 </table>
 <a style="position: absolute; top:80px;" href="addkh.php" class="btn btn-dark btn-block">Thêm khách hàng</a>
</div>
</body>
</html>