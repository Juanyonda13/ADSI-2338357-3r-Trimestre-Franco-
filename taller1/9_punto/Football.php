<?php

require_once("Match.php");
class Football_Tournament{


public $Name;
public $Members_Num;
public $Condition="Acenso";
public function __construct($vr_Name,$vr_Members_Num,$vr_Condition){

    $this->Name=$vr_Name;
    $this->Members_Num=$vr_Members_Num;
    $this->Condition=$vr_Condition;

}
public function getCondition($wind_Match,$Condition){

    if($wind_Match<15){

     $Condition="desendidos por malo";
     echo $Condition;
    }else{
        echo $Condition;}
    

}  


}




?>