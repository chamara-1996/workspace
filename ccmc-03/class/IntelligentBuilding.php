<?php
require_once("Building.php");
require_once("Iintelligence.php");
class IntelligentBuilding extends Building implements Iintelligence{
    function isAutolocked(){
        $message = "オートロック完備しています。";
        return $message;
    }
    function accesswifi(){
        $message = "無線LAN常時接続できます。";
        return $message;
    }
}
?>