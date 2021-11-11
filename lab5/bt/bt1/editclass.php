<!DOCTYPE html>
<html lang="en">
 <?php
 include 'student.php';
 include 'class.php';
 ?>
 <?php
 if(count($_POST)>0){
 $lop = new Lop("qlsinhvien");
 $result = $lop ->Update($_GET["MaLop"],$_POST["MaLop"],$_POST["TenLop"]);
 if($result)
 header("location:showclass.php");
 }
 if(isset($_GET["MaLop"])){
 $lop = new Lop("qlsinhvien");
 $class = $lop->GetByID($_GET["MaLop"]);
 }
 ?>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <title>Document</title>
</head>
<body>
<div class="container">
 <h2>Quản lý lớp học</h2>
 <p><a href="showclass.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">Mã Lớp</label>
 <input type="text" value="<?php echo $class["MaLop"];?>" class="form-control" id="MaLop"
 placeholder="Mã lớp" name="MaLop">
 </div>
 <div class="form-group">
 <label for="pwd">Tên Lớp</label>
 <input type="text" value="<?php echo $class["TenLop"];?>" class="form-control" id="TenLop"
placeholder="Tên lớp" name="TenLop">
</div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javasctip: history.back(1)">Quay
lại</button>
 </form>
</div>
</body>
</html>