<!DOCTYPE html>
<html lang="en">
 <?php
 include 'hangsua.php';
 ?>
 <?php
 if(count($_POST)>0){
 $hs = new HangSua("qlsua");
 $result = $hs ->Update($_GET["MaHS"],$_POST["MaHS"],$_POST["TenHS"],$_POST["DiachiHS"],$_POST["SDTHS"],$_POST["Email"]);
 if($result)
 header("location:showhangsua.php");
 }
 if(isset($_GET["MaHS"])){
 $hs = new HangSua("qlsua");
 $hangsua = $hs->GetByID($_GET["MaHS"]);
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
 <h2>Quản lý hãng sữa</h2>
 <p><a href="index.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">Mã hãng sữa</label>
 <input type="text" value="<?php echo $hangsua["MaHS"];?>" class="form-control" id="MaHS"
placeholder="Mã hãng sữa" name="MaHS">
 </div>
 <div class="form-group">
 <label for="pwd">Tên hãng sữa</label>
 <input type="text" value="<?php echo $hangsua["TenHS"];?>" class="form-control" id="TenHS"
placeholder="Tên hãng sữa" name="TenHS">
</div>
<div class="form-group">
 <label for="pwd">Địa chỉ hãng sữa</label>
 <input type="text" value="<?php echo $hangsua["DiachiHS"];?>" class="form-control" id="DiachiHS"
placeholder="Địa chỉ hãng sữa" name="DiachiHS">
</div>
 <div class="form-group">
 <label for="pwd">SĐT hãng sữa</label>
 <input value="<?php echo $hangsua["SDTHS"];?>" type="number" class="form-control" id="SDTHS"
name="SDTHS">
 </div>
 <div class="form-group">
 <label for="pwd">Email hãng sữa</label>
 <input type="text" value="<?php echo $hangsua["Email"];?>" class="form-control" id="Email"
placeholder="Email hãng sữa" name="Email">
</div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javascript: history.back(1)">Quay
lại</button>
 </form>
</div>
</body>
</html>