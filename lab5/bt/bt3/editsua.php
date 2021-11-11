<!DOCTYPE html>
<html lang="en">
 <?php
 include 'sua.php';
 ?>
 <?php
 if(count($_POST)>0){
 $s = new Sua("qlsua");
 $result = $s ->Update($_GET["MaSua"],$_POST["MaSua"],$_POST["TenSua"],$_POST["MaHS"],$_POST["MaLoai"],$_POST["TrongLuong"],$_POST["DonGia"],$_POST["TPDD"],$_POST["LoiIch"],$_POST["HinhAnh"]);
 if($result)
 header("location:showsua.php");
 }
 if(isset($_GET["MaSua"])){
 $s = new Sua("qlsua");
 $sua = $s->GetByID($_GET["MaSua"]);
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
 <h2>Quản lý sữa</h2>
 <p><a href="index.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">Mã sữa</label>
 <input type="text" value="<?php echo $sua["MaSua"];?>" class="form-control" id="MaSua"
placeholder="Mã sữa" name="MaSua">
 </div>
 <div class="form-group">
 <label for="pwd">Tên sữa</label>
 <input type="text" value="<?php echo $sua["TenSua"];?>" class="form-control" id="TenSua"
placeholder="Tên sữa" name="TenSua">
</div>
<div class="form-group">
 <label for="pwd">Mã hãng sữa</label>
 <input type="text" value="<?php echo $sua["MaHS"];?>" class="form-control" id="MaHS"
placeholder="Mã hãng sữa" name="MaHS">
</div>
<div class="form-group">
 <label for="pwd">Mã loại sữa</label>
 <input type="text" value="<?php echo $sua["MaLoai"];?>" class="form-control" id="MaLoai"
placeholder="Mã loại sữa" name="MaLoai">
</div>
<div class="form-group">
 <label for="pwd">Trọng lượng (g)</label>
 <input type="number" value="<?php echo $sua["TrongLuong"];?>" class="form-control" id="TrongLuong" name="TrongLuong">
</div>
<div class="form-group">
 <label for="pwd">Đơn giá (VNĐ)</label>
 <input type="number" value="<?php echo $sua["DonGia"];?>" class="form-control" id="DonGia" name="DonGia">
</div>
<div class="form-group">
 <label for="pwd">Thành phần dinh dưỡng</label>
 <input type="text" value="<?php echo $sua["TPDD"];?>" class="form-control" id="TPDD" name="TPDD">
</div>
<div class="form-group">
 <label for="pwd">Lợi ích</label>
 <input type="text" value="<?php echo $sua["LoiIch"];?>" class="form-control" id="LoiIch" name="LoiIch">
</div>
<div class="form-group">
 <label for="pwd">Mã hãng sữa</label>
 <input type="file" value="<?php echo $sua["HinhAnh"];?>" class="form-control" id="HinhAnh" name="HinhAnh">
</div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javascript: history.back(1)">Quay
lại</button>
 </form>
</div>
</body>
</html>