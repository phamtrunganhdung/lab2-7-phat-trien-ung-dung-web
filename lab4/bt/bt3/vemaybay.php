<?php
class VeMayBay{
    public $tenchuyen = array("HN-HCM", "HN-CB", "HCM-DL", "HCM-VT");
    public $giave = array(900000, 300000, 200000, 500000);

  function __construct(){
    $this->tenchuyen = $tenchuyen;
    $this->giave = $giave;
  }  

  function get_tenchuyen() {
    return $this->tenchuyen;
  }
  function get_giave() {
    for($i = 0; $i < count($tenchuyen); $i++){
      return $this->$giave[$i];
    }
  }
}
?>