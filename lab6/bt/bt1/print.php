<?php
$no1 =$_REQUEST['n1'];
$no2 =$_REQUEST['n2'];
$req =$_REQUEST['req'];

switch($req){
    case "add":
        echo $no1." + ".$no2." = ".$no1+$no2;
        break;
    case "sub":
        echo $no1." - ".$no2." = ".$no1-$no2;
        break;
    case "mult":
        echo $no1." * ".$no2." = ".$no1*$no2;
        break;
    case "div":
        echo $no1." / ".$no2." = ".$no1/$no2;
        break;
}

?>
