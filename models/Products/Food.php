<?php 
require_once __DIR__.'/Products.php';
class Food extends Products {
    $weight;
    $kindoffood;
    $state;
     public function __construct($name,$categories,$ean,$internal_code)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->weight = $weight;
        $this->kindoffood = $kindoffood;
        $this->state =  $state;
    }


    public function setWeight(){
        if(isnumeric($weight) && ($weight)>0 ){
            return $this->weight = $weight;
        }
    }
    public function getWeight(){
        return $this->weight;
    }
    public function setkindOfFood(){
        if(!isnumeric($kindOfFood) && ($kindOfFood) > '' ){
            return $this->kindOfFood = $kindOfFood;
        }

    }
    public function getkindOfFood(){
        return $this->kindoffood;
    }
    public function setState(){
        if($state = 1){
            return true;
        }
        else{
            return false;
        }
    }
    public function getState(){
        return $this->state;
    }

}