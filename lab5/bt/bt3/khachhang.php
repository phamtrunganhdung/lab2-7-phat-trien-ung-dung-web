<?php
 require_once 'entity.php';
 class KhachHang extends Entity{
 public function GetAll(){
 return $this->mysql->GetAll("KhachHang");
 }
 public function GetByID($makh){
 $query = "select * from KhachHang where MaKH='".$makh."'";
 $result = $this->mysql->MyQuery($query);
 return mysqli_fetch_array($result);
 }
 public function Insert($makh,$tenkh,$gioitinh,$diachikh,$sdtkh){
 $query = "insert into KhachHang values ('".$makh."','".$tenkh."','".$gioitinh."','".$diachikh."',".$sdtkh.")";
 return $this->mysql->MyQuery($query);
 }
 public function Delete($makh){
 $query = "delete from KhachHang where MaKH = '".$makh."'";
 return $this->mysql->MyQuery($query);
 }
 public function Update($makhold, $makhnew,$tenkh,$gioitinh,$diachikh,$sdtkh){
 $query = "update KhachHang set MaKH = '".$makhnew
 ."', TenKH = '".$tenkh
 ."', GioiTinh = '".$gioitinh
 ."', DiaChiKH = '".$diachikh
 ."', SDTKH = '".$sdtkh
 ."' where MaKH= '".$makhold."'";
 echo $query;
 return $this->mysql->MyQuery($query);
 }
 }
?>