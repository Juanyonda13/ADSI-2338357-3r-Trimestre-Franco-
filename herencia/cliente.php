<?php

require_once("cliente.php");

class client extends Person{
public $Password;

public function __construct(string $vr_Name,int $vr_Cedula,int $vr_Age,string $vr_password){
    parent::__construct($vr_Name, $vr_Cedula, $vr_Age);
    $this->Password=$vr_password;

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

public function setPassword ($vr_Password){
    $this->Pasword=$vr_Password;
    
 }

public function getPassword (){
    return $this->Password;
    
 }

 


}
?>