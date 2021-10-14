<?php
class PhanSo{
    public $tuso;
    public $mauso;
    public $tukq;
    public $maukq;

    function __construct($tuso, $mauso){
        $this->tuso = $tuso;
        $this->mauso = $mauso;
    }
    function getPhanSo(){
        return $this->tuso."/".$this->mauso;
    }
    function congPhanSo(PhanSo $pstinh){
        if($this->mauso == $pstinh->mauso){
            $tukq = $this->tuso + $pstinh->tuso;
            $maukq = $this->mauso;
        }else{
            $tukq = $this->tuso * $pstinh->mauso + $pstinh->tuso * $this->mauso;
            $maukq = $this->mauso * $pstinh->mauso;
        }
        return $tukq."/".$maukq;
    }
    function truPhanSo(PhanSo $pstinh){
        if($this->mauso == $pstinh->mauso){
            $tukq = $this->tuso - $pstinh->tuso;
            $maukq = $this->mauso;
        }else{
            $tukq = $pstinh->tuso * $this->mauso - $this->tuso * $pstinh->mauso;
            $maukq = $this->mauso * $pstinh->mauso;
        }
        return $tukq."/".$maukq;
    }
    function nhanPhanSo(PhanSo $pstinh){
        $tukq = $this->tuso * $pstinh->tuso;
        $maukq =$this->mauso * $pstinh->mauso;
        return $tukq."/".$maukq;
    }
    function chiaPhanSo(PhanSo $pstinh){
        $tukq = $this->tuso * $pstinh->mauso;
        $maukq =$this->mauso * $pstinh->tuso;
        return $tukq."/".$maukq;
    }
}
?>