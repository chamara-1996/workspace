<?php
require_once("Building.php");
?>
<?php
class Tower extends Building {
    //属性
    private $builtYear;
   
    //コンストラクタ
    function __construct($name, $height, $builtYear){
        parent::__construct($name, $height);
        $this->builtYear = $builtYear;
    }
   
    //アクセッサメソッド
    function setBuiltYear($year){
        $this->BuiltYear = $year;
    }
    function getBuiltYear(){
   
    return $this->builtYear;
    }
   //メソッド
   function getprofile(){
       $profile = "{$this->name}の高さは{$this->height} mで{$this->builtYear}年に開業しました。";
       return $profile;
   }
}
?>