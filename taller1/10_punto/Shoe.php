<?php
class Shoe{

public $Size;
public $Brand;
public $Stock;

public function __construct($vr_Size,$vr_Brand,$vr_Stock)
{
    $this->Size=$vr_Size;
    $this->Brand=$vr_Brand;
    $this->Stock=$vr_Stock;
}


public function See_Inventary(){
    $arraySee_Inventary= array(
    'talla ' =>$this->Size,
    'Marca ' =>$this->Brand,
    'stock '=>$this->Stock,   
);
return $arraySee_Inventary; 
}


public function getSize()
{
return $this->Size;
}
public function setSize($vr_Size)
{
$this->Size = $vr_Size;
return $this;
}


public function getBrand()
{
return $this->Brand;
}
public function setBrand($vr_Brand)
{
$this->Brand = $vr_Brand;
return $this;
}


public function getStock()
{
return $this->Stock;
}
public function setStock($vr_Stock)
{
$this->Stock = $vr_Stock;
return $this;
}
}


?>