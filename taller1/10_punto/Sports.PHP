<?php
require_once("Shoe.php");
class Sports extends Shoe{
public $description;
public $price;

public function __construct($vr_Size,$vr_Brand,$vr_Stock,$vr_description,$vr_price){
    parent::__construct($vr_Size,$vr_Brand,$vr_Stock);
    $this->description=$vr_description;
    $this->price=$vr_price;
}



public function getSee_Inventary($price,$vr_Stock){
    if($price>$vr_Stock){
        echo"vuelva mañana papi";
    }else{
    $arrayInventary=array(
        'talla ' =>$this->Size,
        'Marca ' =>$this->Brand,
        'stock '=>$this->Stock, 
        'descripcion: ' =>$this->description,
        'precio '=>$this->price,
    );
    return $arrayInventary;
     }  
}

    
        



}
?>