<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Form</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 <!-- Optional theme -->
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstraptheme.min.css">
 <!-- Latest compiled and minified JavaScript -->
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
 <form action="post.php" method="POST" role="form">
 <legend>Get files</legend>
 <div class="form-group">
 <label for="">Name</label>
 <input type="text" class="form-control" id="" placeholder="Input you name" name="name">
 </div>
 <div class="form-group">
 <label for="">Age</label>
 <input type="number" class="form-control" id="number" placeholder="Input your age"
name="age">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
</body>
<script>
    var number = document.getElementById('number');
    number.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
</script>
</html>