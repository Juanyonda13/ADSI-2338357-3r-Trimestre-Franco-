<?php

class MMatch extends Football_Tournament{

public $wind_Match;
public $Tournament_class;

public function __construct($vr_Name,$vr_Members_Num,$vr_Condition,$vr_wind_Match,$vr_Tournament_class){

    parent::__construct($vr_Name,$vr_Members_Num,$vr_Condition);
    $this->wind_Match=$vr_wind_Match;
    $this->Tournament_class=$vr_Tournament_class;


}


}


?>