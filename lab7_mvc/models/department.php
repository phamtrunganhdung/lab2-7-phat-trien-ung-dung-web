<?php
class Department{
 public function __construct($connection)
 {
 $this -> Conn = $connection;
 }
 public function getAll()
 {
 $sql = "Select * from departments";
 $cmd = $this->Conn->prepare($sql);
 $cmd->execute();
 $result = $cmd->fetchAll();
 $this -> Conn = null;
 return $result;
 }
 public function getById($id)
 {
 $sql = "Select * from departments where id = :id";
 $cmd = $this->Conn->prepare($sql);
 $cmd -> execute(array("id"=>$id));
 $result = $cmd->fetchObject();
 $this -> Conn = null;
 return $result;
 }
 public function Add($name, $numberofstaff){
    $sql = "insert into departments(Name, NumberOfStaff) values 
    ('".$name."',".$numberofstaff.")";
    return $this->Conn->query($sql);
}
public function Delete($id){
    $sql = "delete from departments where id = '".$id."'";
    return $this->Conn->query($sql);
}
public function Edit($id, $name, $numberofstaff){
    $sql = "update departments set Name = '".$name."', 
    NumberOfStaff = ".$numberofstaff."
    where id = '".$id."'";
    return $this->Conn->query($sql);
}
}
?>
