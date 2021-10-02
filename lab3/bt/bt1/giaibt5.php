
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
    function USCLN($a, $b) {
        if ($b == 0) return $a;
        return USCLN($b, $a % $b);
    }
    function BSCNN($a, $b) {
        return ($a * $b) / USCLN($a, $b);
    }
    if(isset($_GET['abt5'])){
        $hs_a = $_GET["abt5"];
    }
    if(isset($_GET['bbt5'])){
        $hs_b = $_GET["bbt5"];  
    } 
    echo ("USCLN của $hs_a và $hs_b là: " . USCLN($hs_a, $hs_b)) . "<br>";
    echo ("BSCNN của $hs_a và  $hs_b là: " . BSCNN($hs_a, $hs_b));
?>
    </div>
    <br>
    <a href="bt1.php"><input type="button" value="Quay về trang trước"></a>
</body>
</html>