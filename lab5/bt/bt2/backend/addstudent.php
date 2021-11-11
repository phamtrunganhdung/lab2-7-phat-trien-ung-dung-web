<!DOCTYPE html>
<html lang="en">
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
 <h2>Quản lý sinh viên - Thêm sinh viên</h2>
 <p><a href="../index.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">MSSV</label>
 <input type="text" class="form-control" id="mssv" placeholder="MSSV" name="mssv">
 </div>
 <div class="form-group">
 <label for="pwd">Họ tên</label>
 <input type="text" class="form-control" id="hoten" placeholder="Họ tên" name="hoten">
 </div>
 <div class="form-group">
 <label for="pwd">Lớp</label>
 <input type="text" class="form-control" id="hoten" placeholder="Lớp" name="lop">
 </div>
 <div class="form-group">
 <label for="pwd">Tuổi</label>
 <input type="number" class="form-control" id="tuoi" value="20" name="tuoi">
 </div>
 <button type="submit" class="btn btn-primary">Thêm</button>
 <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay
lại</button>
 </form>
</div>
</body>
</html>