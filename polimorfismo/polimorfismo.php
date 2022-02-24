<?php
class product{
public $description;
private $price;
public $stock;
static $state="Activo";

public function __construct($vr_description,$vr_price){
    
    $this->description=$vr_description;
    $this->price=$vr_price;
    $this->stock=40;
    product::$state;
}

public function setPrice($vr_price){
$this->price = $vr_price;
return $this;
}
public function getPrice(){
return $this->price;
}


public function setState($vr_state){
$this->state = $vr_state;
return $this;
}
public function getState(){
return $this->state;
}



public function getInfoproduct(){
  $arrayProduct=Array(
'Descripcion: '=>$this->description,
'Precio: '=>$this->price,
'Stock inventario: '=>$this->stock,
'Estado: '=>product::$state,

  );
  return $arrayProduct; 

}





}
?>