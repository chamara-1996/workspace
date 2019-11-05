<?php
require_once("Building.php");
?>
<?php
class tower extends building {
    //属性
    private $builtyear;
   
    //コンストラクタ
    function __construct($name, $height, $builtyear) {
        parent::__construct($name, $height);
        $this->builtyear = $builtyear;
    }
   
    //アクセッサメソッド
    function setBuiltyear($year) {
        $this->builtyear = $years;
    }
    function getbuiltyear() {
        return $this-> builtyear;
    }
   
    //メソッド
    function getprofile() {
        $profile = "{$this->name}の高さは{$this->height}mで、{$this->builtyear}年に開業しました.";
        return $profile;
    }
}
?>
