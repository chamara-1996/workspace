<?php
class Building{
    //properties
    protected $name;
    protected $height;
   
    //constractor
    function __construct($name, $height){
        $this->name = $name;
        $this->height = $height;
       
    }
    //accessor method
    function setName($name){
      $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setHeight($height){
      $this->height = $height;
    }
    function getHeight(){
        return $this->height;
    }
    function getprofie() {
        $profile = "{$this->name}建物の名前の高さは{$this->height}ｍです。";
        return $profile;
    }
}
?>
