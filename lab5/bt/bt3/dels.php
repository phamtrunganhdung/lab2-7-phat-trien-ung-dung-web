<?php
require_once 'sua.php';
$MaSua = $_GET['MaSua'];
$sua = new Sua('qlsua');
$sua ->Delete($MaSua);
header('location:showsua.php');
?>