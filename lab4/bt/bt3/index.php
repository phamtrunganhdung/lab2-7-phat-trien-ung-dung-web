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
        background-color: #ADD8E6;
    }
    .card-header{
        background-color: #191970;
        color:white;
    }
    .card-body{
        background-color: #6495ED;
    }
    .btn{
        background-color: #008000;
        font-size: 19px;
        color:white;
    }
    .btn:hover{
        background-color: #006400;
        color: white;
    }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Nhập số lượng hành khách</h3>
                </div>
                <div class="card-body">
                    <form action="nhaphk.php" method="GET">
                        <div class="form-group">
                            <label >Số lượng hành khách</label>
                            <input type="number" class="form-control"  name="n">
                        </div>  
                        <input type="submit" class="btn btn-block" name="submit" value="Tiếp"/>                  
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