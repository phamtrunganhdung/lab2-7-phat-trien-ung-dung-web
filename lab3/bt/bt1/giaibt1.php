
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="kq">
    <?php
    if(isset($_GET['abt1'])){
        $a = $_GET["abt1"];
    }
    if(isset($_GET['bbt1'])){
        $b = $_GET["bbt1"];  
    } 
    if($a == 0 && $b!=0){
        echo "Phương trình vô nghiệm";
    }
    elseif($a==0 && $b==0){
        echo "phương trình có vô số nghiệm";
    }
    else{
        echo "phương trình có 1 nghiệm duy nhất X = ".-($b/$a);
    }
?>
    </div>
    <br>
    <a href="bt1.php"><input type="button" value="Quay về trang trước"></a>
</body>
</html>