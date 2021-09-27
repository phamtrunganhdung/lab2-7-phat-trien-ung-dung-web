<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Xem điểm</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div style="background-color:palevioletred" class="card-header text-center">
                   <h3> KẾT QUẢ THI ĐẠI HỌC</h3>
                </div>
                <div style="background-color:pink" class="card-body">
                    <form action="diemthi.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Toán</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="toan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Lý</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="ly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Hóa</label>
                            <input type="text" class="form-control" id="exampleInputPassword2" name="hoa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Điểm chuẩn</label>
                            <input type="text" class="form-control" id="exampleInputEmail2" name="diemchuan">
                        </div>
                        <hr class="mb-3">
                        <button style="background-color:palevioletred; color:black;" type="submit" name="submit" class="btn btn-primary btn-block">Xem kết quả</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>