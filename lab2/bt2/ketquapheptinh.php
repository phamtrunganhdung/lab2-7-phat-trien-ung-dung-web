<?php

if (!isset($_POST['submit'])) {
    header('location: pheptinh.php');
}

$pheptinh = $_POST['pheptinh'];
$so1 = $_POST['so_1'];
$so2 = $_POST['so_2'];

$ketqua = 0;
$nhan_phep_tinh = '';

if ($pheptinh == 'cong') {
    $ketqua = $so1 + $so2;
    $nhan_phep_tinh = 'chọn phép tính: cộng';
}
else if ($pheptinh == 'tru') {
    $ketqua = $so1 - $so2;
    $nhan_phep_tinh = 'chọn phép tính: trừ';
}
else if ($pheptinh == 'nhan') {
    $ketqua = $so1 * $so2;
    $nhan_phep_tinh = 'chọn phép tính: nhân';
}
else if ($pheptinh == 'chia') {
    $ketqua = $so1 / $so2;
    $nhan_phep_tinh = 'chọn phép tính: chia';
}
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
    <title>Ket qua phep tinh</title>
</head>
<body  style="background-color:lightblue;">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div>
                <div class="form-group">
                <h2 style="color:blue;">PHÉP TÍNH TRÊN HAI SỐ</h2>
                    <label style="color:red;" for=""><?php echo $nhan_phep_tinh; ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label style="color:blue;" for="">số thứ nhất</label>
                    <input type="text" class="form-control" value="<?php echo $so1; ?>" disabled>
                </div>
                <div class="form-group">
                    <label style="color:blue;" for="">số thứ nhì</label>
                    <input type="text" class="form-control" value="<?php echo $so2; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">kết quả</label>
                    <input type="text" class="form-control" value="<?php echo $ketqua; ?>" disabled>
                </div>
                <hr>
                <div class="form-group">
                    <a href="pheptinh.php" class="btn btn-primary btn-block">Quay lại trang trước</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>