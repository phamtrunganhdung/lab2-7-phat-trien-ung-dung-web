<?php
class Employee{
 private $Conn;
 public $Id;
 public $Name;
 public $Surname;
 public $Email;
 public $Phone;
 public function __construct($connection)
 {
 $this -> Conn = $connection;
 }
 public function getAll()
 {
 $sql = "Select * from employees";
 $cmd = $this->Conn->prepare($sql);
 $cmd->execute();
 $result = $cmd->fetchAll();
 $this -> Conn = null;
 return $result;
 }
 public function getById($id)
 {
 $sql = "Select * from employees where id = :id";
 $cmd = $this->Conn->prepare($sql);
 $cmd -> execute(array("id"=>$id));
 $result = $cmd->fetchObject();
 $this -> Conn = null;
 return $result;
 }
 public function Delete($id){
    $sql = "delete from employees where id = '".$id."'";
    return $this->Conn->query($sql);
}
public function Edit($id, $name, $surname, $email, $phone, $departmentId){
    $sql = "update employees set Name = '".$name."', 
    Surname = '".$surname."', 
    email = '".$email."', 
    phone = '".$phone."', 
    departmentId = '".$departmentId."'
    where id = '".$id."'";
    return $this->Conn->query($sql);
}
public function Add($name, $surname, $email, $phone, $departmentId){
    $sql = "insert into employees(Name, SurName, email, phone, departmentId) values 
    ('".$name."','".$surname."','".$email."','".$phone."','".$departmentId."')";
    return $this->Conn->query($sql);
}
}
?>
