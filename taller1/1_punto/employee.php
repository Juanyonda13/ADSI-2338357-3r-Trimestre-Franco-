<?php
class employee {

public $Name;
private $phone_num;
protected $position;
public  $salary;
public $transport_Auxilary;

public function __construct(string $vr_Name,$vr_phone_num,string $vr_position,$vr_salary,$vr_transport_Auxilary){
    $this->Name=$vr_Name;
    $this->phone_num=$vr_phone_num;
    $this->position=$vr_position;
    $this->salary=$vr_salary;
    $this->transport_Auxilary=$vr_transport_Auxilary;
}
public function Personal_Information(){
    $arrayInformation= array(
    'Nombre:' =>$this->Name,
    'Numero de telefono : ' =>$this->phone_num,
    'Cargo: '=>$this->position,
    'salario: '=>$this->salary,
    'Auxiliar de transporte'=>$this->transport_Auxilary,
              
);
}

public function setName($vr_Name){
    $this->Name=$vr_Name;
}
public function getName(){
    return $this->Name;
}


public function setphone_num($vr_phone_num){
    $this->phone_num=$vr_phone_num;
}
public function getphone_num(){
    return $this->phone_num;
}


public function setposition($vr_position){
    $this->position=$vr_position;
}
public function getposition(){
    return $this->position;
}


public function setsalary($vr_salary){
    $this->salary=$vr_salary;
}
public function getsalary(){
    return $this->salary;
}

public function settransport_Auxilary($vr_transport_Auxilary){
    $this->transport_Auxilary=$vr_transport_Auxilary;
}
public function gettransport_Auxilary(){
    return $this->transport_Auxilary;
}


}



?>
