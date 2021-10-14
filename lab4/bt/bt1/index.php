<?php
include 'phanso.php';

$tu1=1;
$mau1=1;
$tu2=1;
$mau2=1;
$nhan="";
$kqTinh="";

if(isset($_GET['tu1'])){
    $tu1 = $_GET["tu1"];
}
if(isset($_GET['mau1'])){
    $mau1 = $_GET["mau1"];
}
if(isset($_GET['tu2'])){
    $tu2 = $_GET["tu2"];
}
if(isset($_GET['mau2'])){
    $mau2 = $_GET["mau2"];
}
if(isset($_GET['pheptinh'])){
    $nhan = $_GET["pheptinh"];
}

$phanso1 = new PhanSo($tu1,$mau1);
$phanso2 = new PhanSo($tu2,$mau2);

if($mau1 == 0 || $mau2 == 0){
    echo "<script type='text/javascript'>alert('Mẫu số phải khác 0');</script>";
}

if($nhan == "cong"){
    $nhan = "Cộng";
    $kqTinh = $phanso1->congPhanSo($phanso2);
}elseif($nhan == "tru"){
    $nhan = "Trừ";
    $kqTinh = $phanso1->truPhanSo($phanso2);
}elseif($nhan == "nhan"){
    $nhan = "Nhân";
    $kqTinh = $phanso1->nhanPhanSo($phanso2);
}else{
    $nhan = "Chia";
    $kqTinh = $phanso1->chiaPhanSo($phanso2);
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
    <title>Phanso</title>
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
        background-color: khaki;
    }

    .card-header{
        background-color: orange;
    }
    .btn{
        background-color: orange;
        color: black;
    }
    .phanso1{
        float: left;
    }
    .phanso2{
        float: left;
    }
    </style>
</head>
<body">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <form action="index.php" method="GET">
                <div class="form-group text-center">
                    <h1 >Bài tập phân số</h1>
                    <label" for="" class="d-inline-block mr-3">chọn phép tính</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio1" value="cong" checked>
                        <label" class="form-check-label" for="inlineRadio1">+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio2" value="tru">
                        <label class="form-check-label" for="inlineRadio2">-</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio3" value="nhan">
                        <label class="form-check-label" for="inlineRadio3">*</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pheptinh" id="inlineRadio4" value="chia">
                        <label class="form-check-label" for="inlineRadio4">/</label>
                    </div>
                </div>
                <div class="phanso1 col-lg-6">
                <div class="form-group">
                    <label  for="">Nhập tử số </label>
                    <input type="number" class="form-control" name="tu1">
                </div>
                <div class="form-group">
                    <label  for="">Nhập mẫu số</label>
                    <input type="number" class="form-control" name="mau1">
                </div>
                </div>  
                <div class="phanso2 col-lg-6">
                <div class="form-group">
                    <label  for="">Nhập tử số </label>
                    <input type="number" class="form-control" name="tu2">
                </div>
                <div class="form-group">
                    <label for="">Nhập mẫu số</label>
                    <input type="number" class="form-control" name="mau2">
                </div>
                </div>             
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-block" name="submit" value="Tính"/>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div>
                <div class="form-group text-center">
                <h1 >Kết quả phép tính</h1>
                    <label for=""><?php echo $nhan ?></label>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">phân số thứ nhất</label>
                    <input type="text" class="form-control" value="<?php echo $phanso1->getPhanSo(); ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">phân số thứ nhì</label>
                    <input type="text" class="form-control" value="<?php echo $phanso2->getPhanSo(); ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">kết quả</label>
                    <input type="text" class="form-control" value="<?php echo $kqTinh ?>" disabled>
                </div>
                <hr>
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
</html>