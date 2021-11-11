<?php
require_once 'khachhang.php';
$MaKH = $_GET['MaKH'];
$khachhang = new KhachHang('qlsua');
$khachhang ->Delete($MaKH);
header('location:showkhachhang.php');
?>