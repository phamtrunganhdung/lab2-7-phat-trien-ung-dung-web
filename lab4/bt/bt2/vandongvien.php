<?php
class VanDongVien{
    public $hoten;
    public $tuoi;
    public $montd;
    public $nang; 
    public $cao;  

    function __construct($hoten, $tuoi, $montd, $nang, $cao){
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
        $this->montd = $montd;
        $this->nang = $nang;
        $this->cao = $cao;
    }
    function get_hoten() {
        return $this->hoten;
      }
    function get_tuoi() {
        return $this->tuoi;
    }
      function get_montd() {
        return $this->montd;
    }
      function get_cannang() {
        return $this->nang;
    }
    function get_chieucao() {
        return $this->cao;
    }
    function soSanh(VanDongVien $vdv){
        if ($this->cao == $vdv->cao){
            if($this->nang == $vdv->nang){
                return 0;
            }elseif($this->nang > $vdv->nang){
                return 1;
            }else{
                return -1;
            }
        }elseif($this->cao > $vdv->cao){
            return 1;
        }else{
            return -1;
        }
    }
}
?>