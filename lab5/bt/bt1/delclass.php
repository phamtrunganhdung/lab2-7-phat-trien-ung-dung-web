<?php
require_once 'class.php';
$malop = $_GET['MaLop'];
$lop = new Lop('qlsinhvien');
$lop ->Delete($malop);
header('location:showclass.php');
?>