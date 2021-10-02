<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Form</title>
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
 <form action="get.php" method="GET" role="form">
 <legend>Get profile</legend>
 <div class="form-group">
 <label for="">Name</label>
 <input type="text" class="form-control" id="" placeholder="Full name" name="name">
 </div>
 <div class="form-group">
 <label for="">Age</label>
 <input type="number" class="form-control" id="number" placeholder="Age" name="age">
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