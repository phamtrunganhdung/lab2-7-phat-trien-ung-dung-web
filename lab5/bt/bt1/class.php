<?php
 require_once 'entity.php';
 class Lop extends Entity {
 public function GetAll(){
 return $this->mysql->GetAll("Lop");
 }
 public function GetByID($malop){
    $query = "select * from lop where MaLop='".$malop."'";
    $result = $this->mysql->MyQuery($query);
    return mysqli_fetch_array($result);
 }
 public function Insert($malop, $tenlop){
    $query = "insert into lop values ('".$malop."','".$tenlop."')";
    return $this->mysql->MyQuery($query);
    }
    public function Delete($malop){
    $query = "delete from lop where MaLop = '".$malop."'";
    return $this->mysql->MyQuery($query);
    }
    public function Update($malopcu, $malopmoi,$tenlop){
    $query = "update lop set MaLop = '".$malopmoi
    ."', TenLop = '".$tenlop
    ."' where MaLop= '".$malopcu."'";
    echo $query;
    return $this->mysql->MyQuery($query);
}
 }
?>