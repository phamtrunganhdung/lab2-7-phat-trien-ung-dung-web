<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>FILE</title>
    <style>
        body{
            background-color: lightgoldenrodyellow;
            color:black;
        }
        .card-header{
            background-color: crimson;
            color:white;
        }
        .btn{
            background-color: crimson;
            color:white;
        }
        .btn:hover{
            background-color: firebrick;
            color:white;
        }
        .btn:active{
            background-color: firebrick;
            color:white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
        <form action="fileinfo.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <h3 class="card-header text-center">Thuộc tính của tập tin</h3>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Tập tin</label>
                    <input type="file" class="form-control" name="file_upload" accept="image/*">
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" class="btn btn-block" name="submit" value="Thuộc tính của tập tin"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>