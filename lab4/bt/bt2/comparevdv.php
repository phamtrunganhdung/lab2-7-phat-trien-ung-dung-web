<?php 
include 'vandongvien.php';
$hoten1 = "";
$tuoi1 = 0;
$montd1 ="";
$cannang1 = 0;
$chieucao1 = 0;
$hoten2 = "";
$tuoi2 = 0;
$montd2 ="";
$cannang2 = 0;
$chieucao2 = 0;

if(isset($_GET['hoten1'])){
    $hoten1 = $_GET['hoten1'];
}
if(isset($_GET['tuoi1'])){
    $tuoi1 = $_GET['tuoi1'];
}
if(isset($_GET['montd1'])){
    $montd1 = $_GET['montd1'];
}
if(isset($_GET['nang1'])){
    $cannang1 = $_GET['nang1'];
}
if(isset($_GET['cao1'])){
    $chieucao1 = $_GET['cao1'];
}
if(isset($_GET['hoten2'])){
    $hoten2 = $_GET['hoten2'];
}
if(isset($_GET['tuoi2'])){
    $tuoi2 = $_GET['tuoi2'];
}
if(isset($_GET['montd2'])){
    $montd2 = $_GET['montd2'];
}
if(isset($_GET['nang2'])){
    $cannang2 = $_GET['nang2'];
}
if(isset($_GET['cao2'])){
    $chieucao2 = $_GET['cao2'];
}

$vdv1 =  new VanDongVien($hoten1,$tuoi1,$montd1,$cannang1,$chieucao1);
$vdv2 =  new VanDongVien($hoten2,$tuoi2,$montd2,$cannang2,$chieucao2);

echo $vdv1->get_hoten();
echo $vdv2->get_hoten();
echo "hihi";
?>