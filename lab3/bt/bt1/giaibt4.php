
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
    if(isset($_GET['nbt4'])){
        $n = $_GET["nbt4"];
    }
    if($n==0 || $n > 9){
        echo "Không có bảng cửu chương này";
    }else{
        echo "Bảng cửu chương của ".$n. " là:";
                echo "<br>";
        for($i = 1; $i <= 10; $i++){
                echo $n." x ".$i." = ".($n*$i);
                echo "<br>";
        }
    }
?>
    </div>
    <br>
    <a href="bt1.php"><input type="button" value="Quay về trang trước"></a>
</body>
</html>