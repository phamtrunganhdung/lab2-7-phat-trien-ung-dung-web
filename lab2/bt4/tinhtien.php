<?php

$gioBatDau = $_POST['gioBatDau'];
$gioKetThuc = $_POST['gioKetThuc'];

$tienMoiGio = 0;
$checkGioNghi = false;

$tongTien = 0;

if ($gioBatDau < 10) {
    $checkGioNghi = true;
} else if ($gioKetThuc <= 17) {
    $tienMoiGio = 20000;
    $tongTien = ($gioKetThuc - $gioBatDau) * $tienMoiGio;
} else if ($gioKetThuc <= 24) {
    if ($gioBatDau < 17) {
        $tienMoiGio = 20000;
        $tongTien += (17 - $gioBatDau) * $tienMoiGio;
    }

    $tienMoiGio = 45000;
    $tongTien += ($gioKetThuc - 17) * $tienMoiGio;
}

if ($checkGioNghi == true) {
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
        <title>Tính tiền</title>
    </head>
    <body >

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div style="text-align: center;" class="alert alert-danger" role="alert">Quán chỉ mở cửa từ 10h-24h
                </div>
                <a href="kara.php" class="btn btn-danger btn-block">Quay lại trang trước</a>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
} else {
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
        <title>Tính tiền</title>
    </head>
    <body style="background-color: #00FA9A">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <h5 class="card-header text-center" style="background-color: darkgreen; color: white;">TÍNH TIỀN KARAOKE</h5>
                    <div class="card-body" style="background-color: #98FB98">
                        <form action="tinhtien.php" method="POST">
                            <div class="form-group">
                                <label for="inlineFormInputGroupUsername2">Giờ bắt đầu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Giờ</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="gioBatDau" value="<?php echo $gioBatDau ?>"
                                           disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inlineFormInputGroupUsername2">Giờ kết thúc</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Giờ</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="gioKetThuc" value="<?php echo $gioKetThuc ?>"
                                           disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inlineFormInputGroupUsername2">Tổng tiền thanh toán</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">VNĐ</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="tongTien"
                                           value="<?php echo $tongTien ?>" disabled>
                                </div>
                            </div>

                            <hr class="mb-3">

                            <div class="form-group">
                                <a href="kara.php" class="btn btn-block btn-primary" style="background-color:darkgreen; color:white">Quay lại trang trước</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}