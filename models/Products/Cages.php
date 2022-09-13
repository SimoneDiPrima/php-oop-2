<?php 
require_once __DIR__.'/Products.php';
class Cages extends Products {
    $weight;
    $weight_range;
    $height;

    public function __construct($name,$categories,$ean,$internal_code,$weight,$weight_range,$height)
    {
        parent:: __construct($name,$categories,$ean,$internal_code);
        $this->setWeight($weight);
        $this->setWeight_Range($weight_range);
        $this->setHeight($height);
    }
    public function setWeight($weight){
        if(isnumeric($weight)){
            return $this->weight = $weight;
        }

    }
    public function getWeight($weight){
        return $this->weight;
    }
    public function setWeight_Range($weight_range){
        if(isnumeric($weight_range)){
            return $this->weight_range = $weight_range;
        }

    }
    public function getWeight_Range($weight_range){
        return $this->weight_range;
    }
    public function setHeight($height){
        if(isnumeric($height)){
            return $this->height = $height;
        }

    }
    public function getHeight($height){
        return $this->height;
    }
   
}