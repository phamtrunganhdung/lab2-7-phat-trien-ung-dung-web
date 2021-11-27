<?php
 require_once 'libs/connection.php';
 require_once 'models/employee.php';
 class EmployeeController{
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
 case "detail":
 $this -> detail();
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
 $emp = new Employee($this->Connection) ;
 $empList = $emp->getAll();
 $this->view("index", array(
 "ListEmp" => $empList,
 "title" => "MVC List"
 ));
 }
 public function detail(){
 $emp = new Employee($this->Connection) ;
 $id = $_GET["id"];
 $empObj = $emp->getById($id);
 $this->view("detail", array(
 "emp" => $empObj,
 "title" => "MVC Obj"
 ));
 }
 public function delete(){
    $emp = new Employee($this->Connection) ;
    $id = $_GET["id"];
    $empdelete = $emp->Delete($id);
    $empList = $emp->getAll();
    $this->view("index", array(
    "ListEmp" => $empList,
    "title" => "MVC List"
    ));
}
public function edit(){
   $emp = new Employee($this->Connection) ;
   $id = $_GET["id"];
   $name =$_GET["name"];
   $surname =$_GET["Surname"];
   $email =$_GET["email"];
   $phone =$_GET["phone"];
   $departmentId =$_GET["departmentId"];
   $empedit = $emp->Edit($id,$name,$surname,$email,$phone,$departmentId);
   $empList = $emp->getAll();
   $this->view("index", array(
   "ListEmp" => $empList,
   "title" => "MVC List"
   ));
}
public function add(){
   $emp = new Employee($this->Connection) ;
   $name =$_GET["name"];
   $surname =$_GET["Surname"];
   $email =$_GET["email"];
   $phone =$_GET["phone"];
   $departmentId =$_GET["departmentId"];
   $empadd = $emp->Add($name,$surname,$email,$phone,$departmentId);
   echo "<h2> Add successfully</h2>";
   echo "<a href=".'../lab7_mvc/index.php'."><button>Accept</button></a>";
}
 public function view($path, $dt){
 $data = $dt;
 require_once "views/employeeViews/".$path.".php";
 }
 }
?>
