<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>BT1</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script ></script>
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
</style>
</head>
<body>
<div class="container">
    <div class="bt1">
        <form action="giaibt1.php" method="GET" role="form">
        <legend>Giải phương trình bậc nhất</legend>
        <div class="form-group">
        <label for="">a</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập a" name="abt1">
        </div>
        <div class="form-group">
        <label for="">b</label>
        <input type="number" class="form-control" id="number" placeholder="Nhập b" name="bbt1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr class="mb-3">
    <div class="bt2">
    <form action="giaibt2.php" method="GET" role="form">
        <legend>Giải phương trình bậc hai</legend>
        <div class="form-group">
        <label for="">a</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập a" name="abt2">
        </div>
        <div class="form-group">
        <label for="">b</label>
        <input type="number" class="form-control" id="number" placeholder="Nhập b" name="bbt2">
        </div>
        <div class="form-group">
        <label for="">c</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập c" name="cbt2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr class="mb-3">
    <div class="bt3">
    <form action="giaibt3.php" method="GET" role="form">
        <legend>Kiểm thử tam giác</legend>
        <div class="form-group">
        <label for="">a</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập cạnh a" name="abt3">
        </div>
        <div class="form-group">
        <label for="">b</label>
        <input type="number" class="form-control" id="number" placeholder="Nhập cạnh b" name="bbt3">
        </div>
        <div class="form-group">
        <label for="">c</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập cạnh c" name="cbt3">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr class="mb-3">
    <div class="bt4">
    <form action="giaibt4.php" method="GET" role="form">
        <legend>Xuất bảng cửu chương</legend>
        <div class="form-group">
        <label for="">n</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập n" name="nbt4">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr class="mb-3">
    <div class="bt5">
    <form action="giaibt5.php" method="GET" role="form">
        <legend>Tìm USCLN, BSCNN</legend>
        <div class="form-group">
        <label for="">a</label>
        <input type="text" class="form-control" id="number" placeholder="Nhập a" name="abt5">
        </div>
        <div class="form-group">
        <label for="">b</label>
        <input type="number" class="form-control" id="number" placeholder="Nhập b" name="bbt5">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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