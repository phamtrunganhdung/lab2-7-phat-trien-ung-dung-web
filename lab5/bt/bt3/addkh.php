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
 <input type="text"  class="form-control" id="MaKH"
placeholder="Mã khách hàng" name="MaKH">
 </div>
 <div class="form-group">
 <label for="pwd">Tên khách hàng</label>
 <input type="text"  class="form-control" id="TenKH"
placeholder="Tên khách hàng" name="TenKH">
</div>
<div class="form-group">
 <label for="pwd">Giới tính</label>
 <select class="form-control" name="GioiTinh" id="GioiTinh">
     <option value="Nam">Nam</option>
     <option value="Nữ">Nữ</option>
     <option value="Khác">Khác</option>
 </select>  
</div>
<div class="form-group">
 <label for="pwd">Địa chỉ khách hàng</label>
 <input type="text"  class="form-control" id="DiaChiKH"
placeholder="Địa chỉ khách hàng" name="DiaChiKH">
</div>
 <div class="form-group">
 <label for="pwd">SĐT khách hàng</label>
 <input type="number" class="form-control" id="SDTKH"
 placeholder="SĐT khách hàng" name="SDTKH">
 </div>
 <button type="submit" class="btn btn-primary">Thêm</button>
 <button type="button" class="btn btn-primary" onclick="javascript: history.back(1)">Quay
lại</button>
 </form>
 <?php
 if(isset($_POST["MaKH"])){
 $kh = new KhachHang("qlsua");
 $result = $kh->Insert($_POST["MaKH"],$_POST["TenKH"],$_POST["GioiTinh"],$_POST["DiaChiKH"],$_POST["SDTKH"]);
 if($result)
 header("location: showkhachhang.php");
 }
 ?>
</div>
</body>
</html>