<?php
class Nguoi{
    public $hoten;
    public $gioitinh;
    public $tuoi;

    function __construct($hoten, $gioitinh, $tuoi) {
        $this->hoten = $hoten;
        $this->gioitinh = $gioitinh;
        $this->tuoi = $tuoi;
      }
      function get_hoten() {
        return $this->hoten;
      }
      function get_gioitinh() {
        return $this->gioitinh;
      }
      function get_tuoi() {
        return $this->tuoi;
      }
}
?>