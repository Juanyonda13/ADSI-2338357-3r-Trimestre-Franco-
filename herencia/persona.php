<?php
class Person{

public $Name;
protected $Cedula;
public $Age;

public function __construct(string $vr_Name,int $vr_Cedula,int $vr_Age){
    $this->Name=$vr_Name;
    $this->Cedula=$vr_Cedula;
    $this->Age=$vr_Age;
}
public function setName ($vr_Name){
   
   $this->Name=$vr_Name;
   
}
public function getName (){
    
    return $this->Name;
 }


 public function setCedula ($vr_Cedula){
    $this->Cedula=$vr_Cedula;
    
 }
 public function getCedula(){
    return $this->Cedula;
    
 }
 public function setAge ($vr_Age){
    $this->Age=$vr_Age;
    
 }
 public function getAge(){
    return $this->Age;
    
 }


}
