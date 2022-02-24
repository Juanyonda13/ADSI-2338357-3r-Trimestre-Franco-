<?php
class Netflix{
public $Film_Name;
public $Creation_Year;
PUBLIC $availible;
private $Return;

function __construct($vr_Film_Name,$vr_Creation_Year,$vr_availible,$vr_Return){
    $this->Film_Name=$vr_Film_Name;
    $this->Creation_Year=$vr_Creation_Year;
    $this->availible=$vr_availible;
    $this->Return=$vr_Return;
}


public function setFilm_Name($vr_Film_Name){
    $this->Film_Name=$vr_Film_Name;
}
public function getFilm_Namet(){
    return $this->Film_Name;
}


public function setCreation_Year($vr_Creation_Year){
    $this->Creation_Year=$vr_Creation_Year;
}
public function getCreation_Year(){
    return $this->Creation_Year;
}


public function setAvailible($vr_availible){
    $this->availible=$vr_availible;
}
public function getAvailible(){
    return $this->availible;
}

public function setReturn($vr_Return){
    $this->Return=$vr_Return;
}
public function getReturn(){
    return $this->Return;
}

public function setRental_Cost($vr_Return){
    $this->Return=$vr_Return;
    if($vr_Return<=5){
    $actual_Date = date("d-m-Y");
    echo "fecha actual : ".$fecha_actual;
    echo "<br>";
    echo "fecha prevista de entrega : ".date("d-m-Y",strtotime($actual_Date ."+ $vr_Return days")); 
    $costo=400 * $vr_Return;
    echo "<br>";
    echo " el costo de su alquiler de la pelicula es de ".$costo."$";
    }else{

    echo "no sea descarado mijo solo son hasta 5 dias";
    }
    
}

}

?>
