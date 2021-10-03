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
    <title>Phep Tinh</title>
</head>
<body   style="background-color:lightblue;">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <form action="ketquapheptinh.php" method="POST">
                <div class="form-group">
                    <h2 style="color:blue;">PHÉP TÍNH TRÊN HAI SỐ</h2>
                    <label style="color:red;" for="" class="d-inline-block mr-3">chọn phép tính</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio1" value="cong" checked>
                        <label style="color:red;" class="form-check-label" for="inlineRadio1">+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio2" value="tru">
                        <label style="color:red;" class="form-check-label" for="inlineRadio2">-</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio3" value="nhan">
                        <label style="color:red;" class="form-check-label" for="inlineRadio3">*</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio4" value="chia">
                        <label style="color:red;" class="form-check-label" for="inlineRadio4">/</label>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label style="color:blue;" for="">số thứ nhất</label>
                    <input type="text" class="form-control" name="so_1">
                </div>
                <div class="form-group">
                    <label style="color:blue;" for="">số thứ nhì</label>
                    <input type="text" class="form-control" name="so_2">
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Tính"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>