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
 <h2>Thêm sữa</h2>
 <p><a href="index.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">Mã sữa</label>
 <input type="text"  class="form-control" id="MaSua"
placeholder="Mã sữa" name="MaSua">
 </div>
 <div class="form-group">
 <label for="pwd">Tên sữa</label>
 <input type="text"  class="form-control" id="TenSua"
placeholder="Tên sữa" name="TenSua">
</div>
<div class="form-group">
 <label for="pwd">Hãng Sữa</label>
 <select class="form-control" name="MaHS" id="MaHS">
     <option value="AB">Abbott</option>
     <option value="DL">DuctLady</option>
     <option value="DM">Dumex</option>
     <option value="DS">Daisy</option>
     <option value="MJ">MeadJonhSon</option>
     <option value="NTF">Nutifood</option>
     <option value="VNM">Vinamilk</option>
 </select>  
</div>
<div class="form-group">
 <label for="pwd">Loại Sữa</label>
 <select class="form-control" name="MaLoai" id="MaLoai">
     <option value="SB">Sữa bột</option>
     <option value="SD">Sữa đặc</option>
     <option value="ST">Sữa tươi</option>
     <option value="STT">Sữa tiệt trùng</option>
 </select>  
</div>
<div class="form-group">
 <label for="pwd">Trọng lượng (g)</label>
 <input type="number"  class="form-control" id="TrongLuong" name="TrongLuong">
</div>
 <div class="form-group">
 <label for="pwd">Đơn giá (VND)</label>
 <input type="number" class="form-control" id="DonGia" name="DonGia">
 </div>
 <div class="form-group">
 <label for="pwd">Thành phần dinh dưỡng</label>
 <input type="text"  class="form-control" id="TPDD"
placeholder="Thành phần dinh dưỡng" name="TPDD">
</div>
<div class="form-group">
 <label for="pwd">Lợi ích</label>
 <input type="text"  class="form-control" id="LoiIch"
placeholder="Lợi ích" name="LoiIch">
</div>
<div class="form-group">
 <label for="pwd">Hình Ảnh</label>
 <input type="file"  class="form-control" id="HinhAnh" name="HinhAnh">
</div>
 <button type="submit" class="btn btn-primary">Thêm</button>
 <button type="button" class="btn btn-primary" onclick="javascript: history.back(1)">Quay
lại</button>
 </form>
 <?php
 if(isset($_POST["MaSua"])){
 $sua = new Sua("qlsua");
 $result = $sua->Insert($_POST["MaSua"],$_POST["TenSua"],$_POST["MaHS"],$_POST["MaLoai"],$_POST["TrongLuong"],$_POST["DonGia"],$_POST["TPDD"],$_POST["LoiIch"],$_POST["HinhAnh"]);
 if($result)
 header("location: showsua.php");
 }
 ?>
</div>
</body>
</html>