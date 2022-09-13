<?php 
require_once __DIR__.'/Products.php';
class Food extends Products {
    $weight;
    $kindoffood;
    $expiration;
    $ingredients;
     public function __construct($name,$categories,$ean,$internal_code,$weight, $kindoffood,$expiration,$ingredients)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->setWeight($weight);
        $this->setkindOfFood($kindoffood);
        $this->setExpiration($expiration);
        $this->getIngredients($ingredients);
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
        if(!isnumeric($kindOffood) && ($kindOffood) > '' ){
            return $this->kindOffood = $kindOffood;
        }

    }
    public function getkindOfFood(){
        return $this->kindoffood;
    }
    public function setExpiration(){
        if(!isnumeric($)){
            return $this->kindOfFood = $kindOfFood;
        }

    }
    public function getExpiration($expiration){
        return $this->expiration;
    }
    public function setIngredients($ingredients){
        if(!isnumeric($ingredients) && ($ingredients) > '' ){
            return $this->kindOfFood = $kindOfFood;
        }

    }
    public function getIngredients(){
        return $this->ingredients;
    }
   

}