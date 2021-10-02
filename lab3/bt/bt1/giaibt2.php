
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
    if (isset ( $_GET ['abt2'] )) {
        $a = $_GET ['abt2'];
    }
    if (isset ( $_GET ['bbt2'] )) {
        $b = $_GET ['bbt2'];
    }
    if (isset ( $_GET ['cbt2'] )) {
        $c = $_GET ['cbt2'];
    }

    echo "Phương trình ".$a."x^2 + ".$b."x + ".$c." = 0 ";

    if ($a == 0) {
        if ($b == 0) {
            echo ("vô nghiệm!");
        } else {
            echo  ("có một nghiệm: "
                    . "x = " . (-$c / $b));
        }
    }else{
        $delta = $b*$b - 4*$a*$c;
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2*$a);
            $x2 = (-$b - sqrt($delta)) / (2*$a);
            echo ("có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        } else if ($delta == 0) {
            $x1 = (-$b / (2 * $a));
            echo ("có nghiệm kép: x1 = x2 = " . $x1);
        } else {
            echo ("vô nghiệm!");
        }
    } 
?>
    </div>
    <br>
<a href="bt1.php"><input type="button" value="Quay về trang trước"></a>
</body>
</html>