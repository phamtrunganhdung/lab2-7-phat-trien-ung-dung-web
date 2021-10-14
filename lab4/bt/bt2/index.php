<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>VĐV</title>
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
    body{
        background-color: gray;
    }
    .card-header{
        background-color: darkgray;
    }
    .card-body{
        background-color: lightgray;
    }
    .btn{
        background-color: #006400;
        font-size: 19px;
        color:white;
    }
    .btn:hover{
        background-color: #008000;
        color: white;
    }
    .vdv1{
        float: left;
    }
    .vdv2{
        float:left;
    }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Nhập thông tin vận động viên</h3>
                </div>
                <div class="card-body">
                    <form action="showvdv.php" method="GET">
                        <div class="vdv1 col-lg-6">
                        <div class="form-group">
                            <label >Họ và Tên</label>
                            <input type="text" class="form-control"  name="hoten1"  >
                        </div>
                        <div class="form-group">
                            <label >Tuổi</label>
                            <input type="number" class="form-control"  name="tuoi1"  >
                        </div>
                        <div class="form-group">
                            <label >Môn thi đấu</label>
                            <select class="form-control" name="montd1" >
                                <option value="Bóng chuyền">Bóng chuyền</option>
                                <option value="Bóng đá">Bóng đá</option>
                                <option value="Quần vợt">Quần vợt</option>
                                <option value="Bắn cung">Bắn cung</option>
                                <option value="Bơi lội">Bơi lội</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Cân nặng (kg)</label>
                            <input type="number" class="form-control"  name="nang1"  >
                        </div>
                        <div class="form-group">
                            <label >Chiều cao (cm)</label>
                            <input type="number" class="form-control"  name="cao1"  >
                        </div>
                        </div>
                        <div class="vdv2 col-lg-6">
                        <div class="form-group">
                            <label >Họ và Tên</label>
                            <input type="text" class="form-control"  name="hoten2"  >
                        </div>
                        <div class="form-group">
                            <label >Tuổi</label>
                            <input type="number" class="form-control"  name="tuoi2"  >
                        </div>
                        <div class="form-group">
                            <label >Môn thi đấu</label>
                            <select class="form-control" name="montd2" >
                                <option value="Bóng chuyền">Bóng chuyền</option>
                                <option value="Bóng đá">Bóng đá</option>
                                <option value="Quần vợt">Quần vợt</option>
                                <option value="Bắn cung">Bắn cung</option>
                                <option value="Bơi lội">Bơi lội</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Cân nặng (kg)</label>
                            <input type="number" class="form-control"  name="nang2" >
                        </div>
                        <div class="form-group">
                            <label >Chiều cao (cm)</label>
                            <input type="number" class="form-control"  name="cao2" >
                        </div>
                        </div>
                        <hr class="mb-3">
                        <input type="submit" class="btn btn-block" name="submit" value="Tiếp"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    var num = document.getElementById('number');
    num.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
</script>