<!DOCTYPE html>
<html lang="en">
<?php
 include 'sua.php'; 
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
 <h1>Thông tin sữa</h1>
 <h3><a href="index.php">Home</a></h3>
 <br>
 <table class="table table-dark">
 <thead>
 <tr>
 <th>Mã sữa</th>
 <th>Tên sữa</th>
 <th>Hãng sữa</th>
 <th>Loại sữa</th>
 <th>Trọng lượng (g)</th>
 <th>Đơn giá (VNĐ)</th>
 <th>TPDD</th>
 <th>Lợi ích</th>
 <th>Hình ảnh</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $sua = new Sua("qlsua");
 $result = $sua->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MaSua']."</td>";
 echo "<td>".$row['TenSua']."</td>";
 echo "<td>".$row['MaHS']."</td>";
 echo "<td>".$row['MaLoai']."</td>";
 echo "<td>".$row['TrongLuong']."</td>";
 echo "<td>".$row['DonGia']."</td>";
 echo "<td>".$row['TPDD']."</td>";
 echo "<td>".$row['LoiIch']."</td>";
 echo "<td>".$row['HinhAnh']."</td>";
 echo "<td><a href='dels.php?MaSua=".$row['MaSua']."'>
 <i class='fas fa-trash'></i>
 </a>
 <a href='editsua.php?MaSua=".$row['MaSua']."'>
 <i class='fa fa-edit'></i>
 </a>

 </td>";
 echo "</tr>";
 }
 ?>
 </tbody>
 </table>
 <a style="position: absolute; top:80px;" href="addsua.php" class="btn btn-dark btn-block">Thêm sữa</a>
</div>
</body>
</html>
