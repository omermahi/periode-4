<?php

//class
class Rechthoek
//properties
{
    private $lengte;
    private $breedte;


    //methode
    public function __construct($lengte, $breedte){
        $this->lengte   = $lengte;
        $this->breedte   = $breedte;
    }


    public function getLengte(){
        return $this->lengte;
    }


    public function getBreedte(){
        return $this->breedte;
    }


    public function berekenOppervlakte(){
        return $this->lengte * $this->breedte;
    }


    public function berekenOmtrek(){
        return $this->lengte + $this->breedte + $this->lengte + $this->breedte;
    }

    public function toonTerug()
    {
        return $this->lengte ."<br>".  $this->breedte ."<br>";
        
    }

}

?>
