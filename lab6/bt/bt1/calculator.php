<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
    <div class="container-fluid">
    Number 1: <input class="form-control-plaintext" type="text" id="num1"><br>
    Number 2: <input class="form-control-plaintext" type="text" id="num2"><br>
    <button class="btn btn-outline-success" type="button" onclick=calc("add")>+</button>
    <button class="btn btn-outline-success" type="button" onclick=calc("sub")>-</button>
    <button class="btn btn-outline-success" type="button" onclick=calc("mult")>*</button>
    <button class="btn btn-outline-success" type="button" onclick=calc("div")>/</button><br>
    Result  : <span id="res"></span><br>
    </div>

    <script>

        function calc(reqType){
            var xhr = new XMLHttpRequest();

            var num1 = document.getElementById("num1").value;
            var num2 = document.getElementById("num2").value;

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status ==200){
                    document.getElementById("res").innerHTML = xhr.responseText;
                }
            }

            xhr.open("POST", "print.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("req="+reqType+"&n1="+num1+"&n2="+num2);
        }
    </script>
</body>
</html>