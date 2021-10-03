<?php
    $r=0;
    $pi=3.14;
    $stron=0;
    $dtron=0;
    $dai=0;
    $rong=0;
    $schunhat=0;

    if(isset($_GET['bankinh'])){
        $r = $_GET["bankinh"];
    }
    $stron = ($r*$r)*$pi;
    $dtron = 2*$pi*$r;

    if(isset($_GET['dai'])){
        $dai = $_GET["dai"];
    }
    if(isset($_GET['rong'])){
        $rong = $_GET["rong"];
    }

    $schunhat = $dai * $rong;

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
    <title>TinhDienTich</title>
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

</style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <form action="bt2.php" method="GET">
                <div class="form-group">
                    <h3 class="card-header text-center">Tính diện tích và chu vi hình tròn</h3>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Bán kính</label>
                    <input type="number" id="number" class="form-control" name="bankinh" placeholder="nhập bán kính">
                </div>
                <div class="form-group">
                    <label for="">Diện tích</label>
                    <input type="text" class="form-control" name="dttron" value="<?php echo $stron ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="">Chu vi</label>
                    <input type="text" class="form-control" name="cvtron" value="<?php echo $dtron ?>" readonly >
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Tính"/>
                </div>
            </form>
        </div>
        <hr class="mb-3">
        <div class="col-md-6 col-lg-6">
        <form action="bt2.php" method="GET">
                <div class="form-group">
                    <h3 class="card-header text-center">Tính diện tích hình chữ nhật</h3>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Chiều dài</label>
                    <input type="number" id="number" class="form-control" name="dai" placeholder="nhập chiều dài">
                </div>
                <div class="form-group">
                    <label for="">Chiều rộng</label>
                    <input type="number" id="number" class="form-control" name="rong" placeholder="nhập chiều rộng">
                </div>
                <div class="form-group">
                    <label for="">Diện tích</label>
                    <input type="text" class="form-control" name="schunhat" value="<?php echo $schunhat ?>" readonly >
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