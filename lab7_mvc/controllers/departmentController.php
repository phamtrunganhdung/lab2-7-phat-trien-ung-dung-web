<?php
 require_once 'libs/connection.php';
 require_once 'models/department.php';
 class DepartmentController{
 private $Connection;
 public function __construct()
 {
 $conn = new Connection();
 $this->Connection = $conn->Connection();
 }
 public function run($action){
 switch($action){
 case "index":
 $this -> index();
 break;
 case "delete":
 $this -> delete();
 break;
 case "edit":
 $this -> edit();
 break;
 case "add":
 $this -> add();
 break;
 }
 }
 public function index(){
 $depart = new Department($this->Connection) ;
 $departList = $depart->getAll();
 $this->view("index", array(
 "ListDepart" => $departList,
 "title" => "MVC List"
 ));
 }
 public function delete(){
    $depart = new Department($this->Connection) ;
    $id = $_GET["id"];
    $depart->Delete($id);
    $departList = $depart->getAll();
    $this->view("index", array(
    "ListDepart" => $departList,
    "title" => "MVC List"
    ));
}
public function edit(){
   $depart = new Department($this->Connection) ;
   $id = $_GET["id"];
   $name =$_GET["name"];
   $numberofstaff =$_GET["numberofstaff"];
   $depart->Edit($id,$name,$numberofstaff);
   $departList = $depart->getAll();
    $this->view("index", array(
    "ListDepart" => $departList,
    "title" => "MVC List"
    ));
}
public function add(){
   $depart = new Department($this->Connection) ;
   $name =$_GET["name"];
   $numberofstaff =$_GET["numberofstaff"];
   $depart->Add($name,$numberofstaff);
   echo "<h2> Add successfully</h2>";
   echo "<a href=".'../lab7_mvc/index.php?action=departindex'."><button>Accept</button></a>";
}
 public function view($path, $dt){
 $data = $dt;
 require_once "views/departmentViews/".$path.".php";
 }
 }
?>
