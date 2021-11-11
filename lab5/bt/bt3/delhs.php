<?php
require_once 'hangsua.php';
$MaHS = $_GET['MaHS'];
$hangsua = new hangsua('qlsua');
$hangsua ->Delete($MaHS);
header('location:showhangsua.php');
?>