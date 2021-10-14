<?php
include 'vandongvien.php';
$hoten1 = "";
$tuoi1 = 0;
$montd1 ="";
$cannang1 = 0;
$chieucao1 = 0;
$hoten2 = "";
$tuoi2 = 0;
$montd2 ="";
$cannang2 = 0;
$chieucao2 = 0;
$kqss="";

if(isset($_GET['hoten1'])){
    $hoten1 = $_GET['hoten1'];
}
if(isset($_GET['tuoi1'])){
    $tuoi1 = $_GET['tuoi1'];
}
if(isset($_GET['montd1'])){
    $montd1 = $_GET['montd1'];
}
if(isset($_GET['nang1'])){
    $cannang1 = $_GET['nang1'];
}
if(isset($_GET['cao1'])){
    $chieucao1 = $_GET['cao1'];
}
if(isset($_GET['hoten2'])){
    $hoten2 = $_GET['hoten2'];
}
if(isset($_GET['tuoi2'])){
    $tuoi2 = $_GET['tuoi2'];
}
if(isset($_GET['montd2'])){
    $montd2 = $_GET['montd2'];
}
if(isset($_GET['nang2'])){
    $cannang2 = $_GET['nang2'];
}
if(isset($_GET['cao2'])){
    $chieucao2 = $_GET['cao2'];
}

$vdv1 =  new VanDongVien($hoten1,$tuoi1,$montd1,$cannang1,$chieucao1);
$vdv2 =  new VanDongVien($hoten2,$tuoi2,$montd2,$cannang2,$chieucao2);

if($vdv1->soSanh($vdv2)==0){
    $kqss = "VĐV ".$vdv1->get_hoten()." có thể hình bằng với VĐV ".$vdv2->get_hoten();
}elseif($vdv1->soSanh($vdv2)==1){
    $kqss = "VĐV ".$vdv1->get_hoten()." có thể hình lớn hơn VĐV ".$vdv2->get_hoten();
}elseif($vdv1->soSanh($vdv2)==-1){
    $kqss = "VĐV ".$vdv1->get_hoten()." có thể hình nhỏ hơn VĐV ".$vdv2->get_hoten();
}else{
    echo "<script type='text/javascript'>alert('Lỗi');</script>";
}
?>
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
        background-color: #900000;
        font-size: 19px;
        color:white;
        float:left;
    }
    .btn:hover{
        background-color: #E00000;
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
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Thông tin của <?php echo $vdv1->get_hoten()?> và <?php echo $vdv2->get_hoten() ?></h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="vdv1 col-lg-6">
                        <div class="form-group">
                            <label >Họ và Tên</label>
                            <input type="text" class="form-control"  name="hoten1" value="<?php echo $vdv1->get_hoten() ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Tuổi</label>
                            <input type="number" class="form-control"  name="tuoi1" value="<?php echo $vdv1->get_tuoi()?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Môn thi đấu</label>
                            <input type="text" class="form-control"  name="montd1" value="<?php echo $vdv1->get_montd()?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Cân nặng (kg)</label>
                            <input type="number" class="form-control"  name="nang1" value="<?php echo $vdv1->get_cannang() ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Chiều cao (cm)</label>
                            <input type="number" class="form-control"  name="cao1" value="<?php echo $vdv1->get_chieucao() ?>" disabled>
                        </div>
                        </div>
                        <div class="vdv2 col-lg-6">
                        <div class="form-group">
                            <label >Họ và Tên</label>
                            <input type="text" class="form-control"  name="hoten2" value="<?php echo $vdv2->get_hoten() ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Tuổi</label>
                            <input type="number" class="form-control"  name="tuoi2" value="<?php echo $vdv2->get_tuoi()?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Môn thi đấu</label>
                            <input type="text" class="form-control"  name="hoten2" value="<?php echo $vdv2->get_montd() ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Cân nặng (kg)</label>
                            <input type="number" class="form-control"  name="nang2" value="<?php echo $vdv2->get_cannang() ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label >Chiều cao (cm)</label>
                            <input type="number" class="form-control"  name="cao2" value="<?php echo $vdv2->get_chieucao() ?>" disabled>
                        </div>                       
                        </div>
                        <div class="form-group">
                            <label >So sánh</label>
                            <input type="text" class="form-control"  value="<?php echo $kqss ?>" disabled>
                        </div>
                        <a href="index.php" class="btn btn-block">Quay lại trang trước</a>
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