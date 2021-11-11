<!DOCTYPE html>
<html lang="en">
 <?php
 include 'khachhang.php';
 ?>
 <?php
 if(count($_POST)>0){
 $kh = new KhachHang("qlsua");
 $result = $kh ->Update($_GET["MaKH"],$_POST["MaKH"],$_POST["TenKH"],$_POST["GioiTinh"],$_POST["DiaChiKH"],$_POST["SDTKH"]);
 if($result)
 header("location:showkhachhang.php");
 }
 if(isset($_GET["MaKH"])){
 $kh = new KhachHang("qlsua");
 $khachhang = $kh->GetByID($_GET["MaKH"]);
 }
 ?>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <title>Document</title>
 <style>
     body{
         background-color: #383838;
         color: white;
     }
 </style>
</head>
<body>
<div class="container">
 <h2>Quản lý khách hàng</h2>
 <p><a href="index.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">Mã khách hàng</label>
 <input type="text" value="<?php echo $khachhang["MaKH"];?>" class="form-control" id="MaKH"
placeholder="Mã khách hàng" name="MaKH">
 </div>
 <div class="form-group">
 <label for="pwd">Tên khách hàng</label>
 <input type="text" value="<?php echo $khachhang["TenKH"];?>" class="form-control" id="TenKH"
placeholder="Tên khách hàng" name="TenKH">
</div>
<div class="form-group">
 <label for="pwd">Giới tính</label>
 <input type="text" value="<?php echo $khachhang["GioiTinh"];?>" class="form-control" id="Gioi Tinh"
placeholder="Giới tính" name="GioiTinh">
</div>
<div class="form-group">
 <label for="pwd">Địa chỉ khách hàng</label>
 <input type="text" value="<?php echo $khachhang["DiaChiKH"];?>" class="form-control" id="DiaChiKH"
placeholder="Địa chỉ khách hàng" name="DiaChiKH">
</div>
 <div class="form-group">
 <label for="pwd">SĐT khách hàng</label>
 <input value="<?php echo $khachhang["SDTKH"];?>" type="number" class="form-control" id="SDTKH"
name="SDTKH">
 </div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javascript: history.back(1)">Quay
lại</button>
 </form>
</div>
</body>
</html>