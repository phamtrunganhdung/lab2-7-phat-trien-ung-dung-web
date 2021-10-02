
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
    if (isset ( $_GET ['abt3'] )) {
        $a = $_GET ['abt3'];
    }
    if (isset ( $_GET ['bbt3'] )) {
        $b = $_GET ['bbt3'];
    }
    if (isset ( $_GET ['cbt3'] )) {
        $c = $_GET ['cbt3'];
    }

    if($a*$b*$c == 0){
        echo "Số liệu nhập vào không phải của tam giác";
    }
    else{
        echo "Tam giác có ba cạnh a=".$a." b=".$b." c=".$c." ";
        if($a==$b && $a==$c){
            echo "là tam giác đều";
        }elseif($a==$b || $b==$c || $c==$a){
            echo "là tam giác cân";
        }elseif($a*$a == $b*$b+$c*$c || $b*$b == $a*$a+$c*$c || $c*$c == $a*$a+$b*$b){
            echo "là tam giác vuông";
        }else{
            echo "là tam giác thường";
        }
    }
?>
    </div>
    <br>
<a href="bt1.php"><input type="button" value="Quay về trang trước"></a>
</body>
</html>