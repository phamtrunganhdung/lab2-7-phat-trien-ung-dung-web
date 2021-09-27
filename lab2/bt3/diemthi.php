<?php
if (!isset($_POST['submit'])) {
    header('location: xemdiem.php');
}

$diemtoan = $_POST['toan'];
$diemly = $_POST['ly'];
$diemhoa = $_POST['hoa'];
$diemchuan = $_POST['diemchuan'];

$tongdiem = $diemtoan + $diemly + $diemhoa;

$ketqua = $tongdiem >= $diemchuan ? 'Đậu' : 'Tạch';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Điểm thi</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div style="background-color:palevioletred" class="card-header text-center">
                    <h3>KẾT QUẢ THI ĐẠI HỌC</h3>
                </div>
                <div class="card-body" style="background-color:pink">
                    <form action="diemthi.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Toán</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="toan" value="<?php echo $diemtoan ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Lý</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="ly" value="<?php echo $diemly ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Hóa</label>
                            <input type="text" class="form-control" id="exampleInputPassword2" name="hoa" value="<?php echo $diemhoa ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Tổng điểm</label>
                            <input type="text" class="form-control" id="exampleInputEmail2" disabled value="<?php echo $tongdiem ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3">Điểm chuẩn</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"  name="diemchuan" value="<?php echo $diemchuan ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kết quả</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" disabled value="<?php echo $ketqua ?>" disabled>
                        </div>
                        <hr class="mb-3">
                        <a style="background-color:palevioletred; color:black;" href="xemdiem.php" class="btn btn-primary btn-block">Quay lại trang trước</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>