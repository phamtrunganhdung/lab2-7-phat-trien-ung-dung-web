<?php
require_once 'entity.php';
class Sua extends Entity {
    public function GetAll(){
        return $this->mysql->GetAll("Sua");
    }
    public function GetByID($masua){
        $query = "select * from sua where MaSua = '".$masua."'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
    public function Delete($masua){
        $query = "delete from sua where MaSua = '".$masua."'";
        return $this->mysql->MyQuery($query);
    }
    public function Insert($masua,$tensua,$mahs,$maloai,$trongluong,$dongia,$tpdd,$loiich,$hinhanh){
        $query = "insert into sua values ('".$masua."','".$tensua."','".$mahs."','".$maloai."',".$trongluong.",".$dongia.",'".$tpdd."','".$loiich."',load_file('".$hinhanh."'))";
        return $this->mysql->MyQuery($query);
    }
    public function Update($masuaold,$masuanew,$tensua,$mahs,$maloai,$trongluong,$dongia,$tpdd,$loiich,$hinhanh){
        $query = "update sua set MaSua = '".$masuanew."',
        TenSua = '".$tensua."',
        MaHS = '".$mahs."',
        MaLoai = '".$maloai."',
        TrongLuong = ".$trongluong.",
        DonGia = ".$dongia.",
        TPDD = '".$tpdd."',
        LoiIch = '".$loiich."',
        HinhAnh = load_file('".$hinhanh."')
        where MaSua = '".$masuaold."'";
        echo $query;
        return $this->mysql->MyQuery($query);
    }
}
?>