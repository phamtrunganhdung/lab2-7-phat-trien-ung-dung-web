<?php
 require_once 'entity.php';
 class HangSua extends Entity{
 public function GetAll(){
 return $this->mysql->GetAll("HangSua");
 }
 public function GetByID($mahs){
 $query = "select * from hangsua where MaHS='".$mahs."'";
 $result = $this->mysql->MyQuery($query);
 return mysqli_fetch_array($result);
 }
 public function Insert($mahs,$tenhs,$diachihs,$sdt,$email){
 $query = "insert into hangsua values ('".$mahs."','".$tenhs."',".$diachihs.",'".$sdt."','".$email."')";
 return $this->mysql->MyQuery($query);
 }
 public function Delete($mahs){
 $query = "delete from hangsua where MaHS = '".$mahs."'";
 return $this->mysql->MyQuery($query);
 }
 public function Update($mahsold, $mahsnew,$tenhs,$diachihs,$sdt,$email){
 $query = "update hangsua set MaHS = '".$mahsnew
 ."', TenHS = '".$tenhs
 ."', DiaChiHS = '".$diachihs
 ."', SDTHS = '".$sdt
 ."', Email = '".$email
 ."' where MaHS= '".$mahsold."'";
 echo $query;
 return $this->mysql->MyQuery($query);
 }
 }
?>