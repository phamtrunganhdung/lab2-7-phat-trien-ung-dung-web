<?php
include 'mysqlhelper.php';
abstract class Entity{
 public $mysql;
 function __construct($db)
 {
 $this->mysql = new MySQLHelper("localhost","root","anhdung0403");
 $this->mysql -> OpenDB($db);
 }
 abstract function GetAll();
 abstract function GetByID($id);
}
?>